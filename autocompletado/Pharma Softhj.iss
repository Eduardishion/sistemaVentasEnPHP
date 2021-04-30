; Script generated by the Inno Setup Script Wizard.
; SEE THE DOCUMENTATION FOR DETAILS ON CREATING INNO SETUP SCRIPT FILES!

[Setup]
AppName=Pharma Soft
AppVerName=Pharma Soft1.0
AppPublisher=Easy Soft, Inc.
DefaultDirName={pf}\Pharma Soft
DefaultGroupName=Pharma Soft
AllowNoIcons=yes

[Tasks]
Name: "desktopicon"; Description: "Create a &desktop icon"; GroupDescription: "Additional icons:"

[Files]
Source: "C:\xampp-portable\htdocs\pruevas\index.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\entrada.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina2.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina3.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina4.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina5.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina6.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina7.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina8.php"; DestDir: "{app}"; Flags: ignoreversion
Source: "C:\xampp-portable\htdocs\pruevas\pagina9.php"; DestDir: "{app}"; Flags: ignoreversion
; NOTE: Don't use "Flags: ignoreversion" on any shared system files

[Icons]
Name: "{group}\Pharma Soft"; Filename: "{app}\index.php"
Name: "{group}\Uninstall Pharma Soft"; Filename: "{uninstallexe}"
Name: "{userdesktop}\Pharma Soft"; Filename: "{app}\index.php"; Tasks: desktopicon

[Run]
Filename: "{app}\index.php"; Description: "Launch Pharma Soft"; Flags: shellexec postinstall skipifsilent

