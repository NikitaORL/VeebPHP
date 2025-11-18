<?php
echo "<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "<pre>git init</pre>";
echo "</dt>";
?>
<li>Kongigureerimine
<pre>
 git config --global user.name "Nikita Orlenko"

 git config --global user.email "niita.orlenko234@gmail.com"

 git config --global --list

user.name=Nikita Orlenko
user.email=niita.orlenko234@gmail.com
</pre>
</li>

<li>
    Ssh võti loomine
    <pre>
         ssh-keygen -o -t rsa -C "nikita.orlenko234@gmail.com"
    </pre>
    id_ras.pub võti kopeeritakse githubi nagi deploy key
</li>
<li>
    jälgimise lisamine ka commit´i tegemine
</li>
<pre>
    git status
    git add .
    git commit -a -m " commiti tekst"
</pre>
<?php
echo "<li>GIT HUB projektiga sidumine";
echo "<pre>";
echo "C:\Users\opilane\Desktop\php1tund>git remote add origin git@github.com:NikitaORL/VeebPHP.git

C:\Users\opilane\Desktop\php1tund>git branch -M main

C:\Users\opilane\Desktop\php1tund>git push -u origin main";
echo "</pre>";
echo "</li>";


echo "<li> Projekti kloonimine desktopi. <br>;
* Kontrolli et id_rsa võtion olemas .ssh kaustas<br>
* GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone";
echo "</ol>";
echo "</li>";
echo "</pre>";