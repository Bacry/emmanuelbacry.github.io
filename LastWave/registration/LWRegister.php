<?php$name=$_REQUEST['name'];$email=$_REQUEST['email'];$organization=$_REQUEST['organization'];$fichier_nom="registered";$ip=getenv("REMOTE_ADDR") ;`echo -n "$ip\t'$name'\t'$email'\t'$organization'\t" >> $fichier_nom`;`date +%x%t%T >> $fichier_nom`;echo "Thank you for registering" ;exit;?>