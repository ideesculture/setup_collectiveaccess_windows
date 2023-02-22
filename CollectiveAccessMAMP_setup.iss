#include "C:\Program Files (x86)\Inno Download Plugin\idp.iss"
; -- CodeDownloadFiles.iss --
;
; This script shows how the CreateDownloadPage support function can be used to
; download temporary files while showing the download progress to the user.

[Setup]
AppName=CollectiveAccessMAMP
AppVersion=0.1
WizardStyle=modern
OutputDir=c:\MAMP\htdocs\
DefaultDirName=CollectiveAccessMAMP
OutputBaseFilename=CollectiveAccessMAMP_setup

[Files]
; Place any regular files here
Source: "setup.php"; DestDir: "{app}";
Source: "CollectiveAccessMAMP_setup.bat"; DestDir: "{app}";
Source: "7za.exe"; DestDir: "{app}";
; These files will be downloaded
Source: "{tmp}\providence.zip"; DestDir: "{app}"; Flags: external

[Run]
Filename: "{app}\CollectiveAccessMAMP_setup.bat"; Parameters: "install";
;Flags: runhidden
Filename: "http://localhost/providence/"; \
    Flags: shellexec postinstall runmaximized; \
    Description: "Show Overview"

[Code]
procedure InitializeWizard;
begin
  idpAddFile('https://github.com/collectiveaccess/providence/archive/refs/tags/1.7.17.zip', ExpandConstant('{tmp}\providence.zip'));
  { Download after "Ready" wizard page }
  idpDownloadAfter(wpReady);
end;