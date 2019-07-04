# lukashueller.de

Die Datei `.circleci/config.yml` ist für das automatische Deployen der Webseite verantwortlich.

Damit der Server erreichbar ist, muss ein A-Record zum DNS hinzugefügt werden, der auf die IP `116.203.58.108` zeigt.

Für weitere Subdomains und andere Projekte, muss Julius ein neues Repo anlegen, da sonst das Auto-deployment nicht funktioniert. Ebenso müssen SSL-Zertifikate und Ordnerstrukturen auf dem Server angelegt werden, damit das ganze funktioniert.

Falls eine Datenbank benötigt wird oder der Webserver auf einen bestimmten Ordner zeigen soll, bitte einfach Bescheid geben.