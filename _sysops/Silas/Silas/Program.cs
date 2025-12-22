using System;
using System.IO;
using System.Text.Json;
using System.Collections.Generic;
using System.Linq;

namespace RaggieSoft.Silas;

class Program
{
    static void Main(string[] args)
    {
        Console.ForegroundColor = ConsoleColor.Cyan;
        Console.WriteLine("/// SILAS v2.0 // JSON INTEGRITY SENTINEL ///");
        Console.ResetColor();
        Console.WriteLine(new string('-', 50));

        // 1. Locate the "Database" (The data/routes folder)
        string currentDir = Directory.GetCurrentDirectory();

        // Logic to find the root depending on where we run from (Debug vs Release vs Linux Prod)
        string rootDir = FindRootDirectory(currentDir);

        if (rootDir == null)
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("[CRITICAL] Could not locate repository root. Aborting.");
            return;
        }

        string routesPath = Path.Combine(rootDir, "data", "routes");
        string pagesPath = Path.Combine(rootDir, "pages"); // Where the PHP files live

        Console.WriteLine($"[TARGET] Database Sector: {routesPath}");

        if (!Directory.Exists(routesPath))
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine($"[ERROR] Routes directory not found at: {routesPath}");
            return;
        }

        // 2. Scan and Validate
        string[] jsonFiles = Directory.GetFiles(routesPath, "*.json");
        Console.WriteLine($"[SCAN] Found {jsonFiles.Length} data shards.");
        Console.WriteLine("");

        int totalErrors = 0;

        foreach (var file in jsonFiles)
        {
            totalErrors += ValidateShard(file, pagesPath);
        }

        Console.WriteLine(new string('-', 50));
        if (totalErrors == 0)
        {
            Console.ForegroundColor = ConsoleColor.Green;
            Console.WriteLine("[STATUS] SYSTEM INTEGRITY: 100%");
            Console.WriteLine(">> All routes valid. All views exist.");
        }
        else
        {
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine($"[STATUS] SYSTEM INTEGRITY COMPROMISED: {totalErrors} anomalies detected.");
        }
        Console.ResetColor();
    }

    static int ValidateShard(string filePath, string pagesRoot)
    {
        string fileName = Path.GetFileName(filePath);
        int errors = 0;

        try
        {
            string content = File.ReadAllText(filePath);

            // Parse JSON to ensure syntax is valid
            // We use Dictionary<string, JsonElement> because the structure is "Route" : { object }
            var routes = JsonSerializer.Deserialize<Dictionary<string, JsonElement>>(content);

            Console.Write($"[{fileName}] Syntax: ");
            Console.ForegroundColor = ConsoleColor.Green;
            Console.Write("OK");
            Console.ResetColor();
            Console.WriteLine($" | Records: {routes.Count}");

            // Deep Scan: Check if the 'view' files actually exist
            foreach (var route in routes)
            {
                if (route.Value.TryGetProperty("view", out JsonElement viewProp))
                {
                    string viewName = viewProp.GetString();
                    string expectedPhp = Path.Combine(pagesRoot, viewName + ".php");

                    // Handle "index" implication if needed, but let's stick to direct mapping first
                    if (!File.Exists(expectedPhp))
                    {
                        Console.ForegroundColor = ConsoleColor.Yellow;
                        Console.WriteLine($"    [MISSING LINK] Route '{route.Key}' points to missing file:");
                        Console.WriteLine($"                   {expectedPhp}");
                        Console.ResetColor();
                        errors++;
                    }
                }
            }
        }
        catch (JsonException ex)
        {
            Console.Write($"[{fileName}] Syntax: ");
            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("CORRUPT");
            Console.WriteLine($"    >> {ex.Message}");
            Console.ResetColor();
            errors++;
        }

        return errors;
    }

    static string FindRootDirectory(string startPath)
    {
        DirectoryInfo dir = new DirectoryInfo(startPath);
        while (dir != null)
        {
            // We identify the root by the presence of the 'data' folder and 'pages' folder
            if (Directory.Exists(Path.Combine(dir.FullName, "data")) &&
                Directory.Exists(Path.Combine(dir.FullName, "pages")))
            {
                return dir.FullName;
            }
            dir = dir.Parent;
        }
        return null;
    }
}