---
title: Modul zur Installation hinzufügen
---

Führen Sie in der Konsole im Hauptverzeichnis Ihres Shops (oberhalb des `source`- und `vendor`-Verzeichnisses) diesen Befehl aus, um das Modul **{$modulename}** zur Installation hinzuzufügen:

```bash
php composer require {$composerident}:^{$moduleversion} --update-no-dev
``` 

Im weiteren Ablauf werden Sie gefragt, ob die Shopdateien überschrieben werden sollen. 

```bash
Do you want to overwrite existing OXID eShop files? (y/N)
```

Bestätigen Sie diese Frage, um den mitgelieferten Patch anzuwenden.


> [i] Benötigt Ihre Installation einen anderen Aufruf von Composer, ändern Sie den Befehl bitte entsprechend ab. Für weitere Optionen dieses Befehls lesen Sie bitte die [Dokumentation von Composer](https://getcomposer.org/doc/03-cli.md#require).
