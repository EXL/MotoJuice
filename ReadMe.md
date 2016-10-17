Moto Juice
=============

The Moto Juice theme for WordPress was based on the Twenty Fourteen WordPress default theme in 2016 especially for my blog. Theme tries to convey a fun and sunny mood with the help of bright and rich colors. It supports adaptive layout for smartphones and tablets.

![Moto Juice WordPress Theme Screen](https://raw.github.com/EXL/MotoJuice/master/screenshot.png)

The main menu of the theme uses the sidebar widgets as a contents. In header of the Moto Juice was added specially widget for showing current projects and their descriptions.

## Build

* Clone repository into deploy directory:

```sh
cd ~/Deploy/
git clone https://github.com/EXL/MotoJuice
```

* Create MotoJuice.zip install archive:

```sh
cd ~/Deploy/MotoJuice/
git archive master --prefix='moto-juice/' --format=zip > MotoJuice.zip
```

## Translate

You can translate Moto Juice theme with the [Poedit](https://poedit.net/) program to any language.

## Install

Go to the WordPress Control Panel and choose "Appearance" => "Themes", click "Add New" button, then click "Upload Theme" button, choose MotoJuice.zip archive and click "Install Now".

You can also get latest ready-to-install package MotoJuice.zip from the [releases](https://github.com/EXL/MotoJuice/releases) section.

Please don't forget replace `CORRECT-UA-ID` from analyticstracking.php with your Google Analytics ID.

## More information

Please read [Creating Guide (In Russian)](http://exlmoto.ru/wordpress-moto-juice-redesign) for more info about creating Moto Juice theme for WordPress.
