# copying files to public_html
rm -R ../public_html/*
cp -R mateos/public/. ../public_html

# link to storage
ln -s /home/mateosenlinea/mateos/mateos/storage/app/public/ /home/mateosenlinea/mateos/mateos/public/storage
ln -s /home/mateosenlinea/mateos/mateos/storage/app/public/ /home/mateosenlinea/public_html/storage

# fix index file
sed -i 's=/../vendor/autoload.php=/../mateos/mateos/vendor/autoload.php=g' ../public_html/index.php
sed -i 's=/../bootstrap/app.php=/../mateos/mateos/bootstrap/app.php=g' ../public_html/index.php
