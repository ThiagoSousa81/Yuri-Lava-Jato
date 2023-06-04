Function EBS-CLI{    
[Console]::Title = "EBS-CLI - Abrindo o arquivo..."
$CSV = Import-CSV -Path "$pwd/Documents/EBS-CLI/connection.csv" -Header 'Key', 'IV', 'Multiple', 'File1', 'File2'
    #$content = Get-Content -Path $CSV.File1 -Encoding Byte       
    #$String = [Convert]::ToBase64String($content)
    [Console]::Writeline("Abrindo o arquivo...")
    try{    
        $content = [System.IO.File]::ReadAllBytes($CSV.File1)
        [Console]::Writeline("Criptografando sobre os múltiplos...")
        [Console]::Title = "EBS-CLI - 3DES - Criptografando..."
        for($i = 0; $i -lt $CSV.Multiple; $i++)    
        {            
            [Console]::Write("Múltiplo")
            [Console]::Writeline($i + 1)
            $Key = [Text.Encoding]::UTF8.GetBytes($CSV.Key)
            $IV = [Text.Encoding]::UTF8.GetBytes($CSV.IV)        
            $3DES_CSP = New-Object System.Security.Cryptography.TripleDESCryptoServiceProvider
            $MS = New-Object System.IO.MemoryStream
            $CS = New-Object Security.Cryptography.CryptoStream $MS, $3DES_CSP.CreateEncryptor($Key, $IV), "Write"
            $SW = New-Object System.IO.StreamWriter $CS
            $SW.Write($content, 0, $content.Length)
            $SW.Close()
            $CS.Close()
            $content = $MS.ToArray()        
        }
        [Console]::Title = "EBS-CLI - Gravando o conteúdo..."
        [Console]::Writeline("Gravando no arquivo...")
        Set-Content -Path $CSV.File2 ([Convert]::ToBase64String($content))
        #[System.IO.File]::WriteAllBytes($CSV.File2, $content)
     }
     catch{
        Write-Host "Erro: " $_.Exception.Message
     }
}

EBS-CLI
