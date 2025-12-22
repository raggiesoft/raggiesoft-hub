using System;
using System.IO;
using System.Runtime.InteropServices;

namespace RaggieSoft.Silas;

class Program
{
    static void Main(string[] args)
    {
        // 1. Establish Identity & Environment
        // This proves to us that the .NET Runtime is talking to the underlying OS
        Console.ForegroundColor = ConsoleColor.Cyan;
        Console.WriteLine("/// SILAS v1.0 // DATA GUARDIAN ///");
        Console.WriteLine($"[SYSTEM] OS: {RuntimeInformation.OSDescription}");
        Console.WriteLine($"[SYSTEM] Architecture: {RuntimeInformation.OSArchitecture}");
        Console.WriteLine($"[SYSTEM] Framework: {RuntimeInformation.FrameworkDescription}");
        Console.ResetColor();
        Console.WriteLine(new string('-', 40));

        // 2. Identify Location
        // Where exactly are we executing from?
        string currentDir = Directory.GetCurrentDirectory();
        Console.WriteLine($"[STATUS] Active in sector: {currentDir}");

        // 3. Environmental Scan (Looking for the PHP .env file)
        // We assume Silas is running from /var/www/raggiesoft-hub/_sysops/Silas/bin/Release/net10.0/
        // So we need to traverse UP to find the root .env file.

        string[] potentialPaths = {
            Path.Combine(currentDir, "../../../../../.env"), // Production (Deep in bin/release)
            Path.Combine(currentDir, "../../../.env"),       // Dev/Debug (Shallow)
            Path.Combine(currentDir, ".env")                 // Fallback (Same folder)
        };

        bool envFound = false;
        foreach (var path in potentialPaths)
        {
            // Path.GetFullPath resolves the "../.." into a readable string
            string resolvedPath = Path.GetFullPath(path);

            if (File.Exists(resolvedPath))
            {
                Console.ForegroundColor = ConsoleColor.Green;
                Console.WriteLine($"[ACCESS] Configuration detected at: {resolvedPath}");
                Console.ResetColor();
                envFound = true;
                break;
            }
        }

        if (!envFound)
        {
            Console.ForegroundColor = ConsoleColor.Yellow;
            Console.WriteLine($"[ALERT] .env configuration not found. Operating in sterile mode.");
            Console.ResetColor();
        }

        // 4. Command Handling
        if (args.Length > 0)
        {
            Console.WriteLine($"[DIRECTIVE] Processing command: {args[0].ToUpper()}");
        }
        else
        {
            Console.WriteLine("[STANDBY] Awaiting directives. (Use --help for protocols)");
        }
    }
}