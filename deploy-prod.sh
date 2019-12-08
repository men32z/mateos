rm -R ../public_html/*
cp -R mateos/public/. ../public_html
sed -i 's=/../vendor/autoload.php=/../mateos/mateos/vendor/autoload.php=g' ../public_html/index.php
sed -i 's=/../bootstrap/app.php=/../mateos/mateos/bootstrap/app.php=g' ../public_html/index.php
