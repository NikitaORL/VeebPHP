<div id="GitKasutamine">
    <div>
        <h3>Repo loomine</h3>
        <pre>git init</pre>
        <pre>git init</pre>
    </div>
    <div>
        <h3>Kongigureerimine</h3>
        <pre>
git config --global user.name "Nikita Orlenko"
git config --global user.email "niita.orlenko234@gmail.com"
git config --global --list
user.name=Nikita Orlenko
user.email=niita.orlenko234@gmail.com
        </pre>
    </div>
    <div>
        <h3>Ssh võti loomine</h3>
        <pre>ssh-keygen -o -t rsa -C "nikita.orlenko234@gmail.com"</pre>
        <p>id_rsa.pub võti kopeeritakse githubi nagu deploy key</p>
    </div>
    <div>
        <h3>Commit tegemine</h3>
        <pre>
git status
git add .
git commit -a -m "commiti tekst"
        </pre>
    </div>
    <div>
        <h3>GIT HUB projektiga sidumine</h3>
        <pre>
C:\Users\opilane\Desktop\php1tund>git remote add origin git@github.com:NikitaORL/VeebPHP.git
C:\Users\opilane\Desktop\php1tund>git branch -M main
C:\Users\opilane\Desktop\php1tund>git push -u origin main
        </pre>
    </div>
    <div>
        <h3>Projekti kloonimine desktopi</h3>
        <p>* Kontrolli et id_rsa võti on olemas .ssh kaustas</p>
        <p>* GIT CMD on lahti</p>
        <pre>git clone</pre>
    </div>
</div>
