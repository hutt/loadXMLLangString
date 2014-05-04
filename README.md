loadXMLLangString
=================

This is a little PHP class to load Strings from a XML file depending on the visitor's language.

## Example
`strings.xml` containing your Strings:
```XML
<xml>
<strings lang="de">
	<string id="heading">Willkommen!</string>
	<string id="text">Schön, dich zu sehen!</string>
</strings>
<strings lang="en">
	<string id="heading">Welcome!</string>
	<string id="text">Nice to see you!</string>
</strings>
</xml>
```

`index.php`:
```PHP
<?php
require("loadStrings.class.php");
$string = new String;
?>
<!Doctype html>
<html>
<body>
<h1><?=$string->autoLoadString("heading")?></h1>
<p><?=$string->autoLoadString("text")?></p>
</body>
</html>
```

There's Peter. Peter's from Austria. He loads your website using this library. It detects that his browser language string is `de`. Your XML file contains Strings with the attribute `lang="de"`. He will be welcomed in German.
