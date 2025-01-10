<!-- PRESENTATION -->
<section class="section-presentation" id="section-presentation" style="<?= $sectionStyle; ?>">
        <div class="container-presentation">
            <div class="icone-presentation">
                <i class="fa-sharp fa-solid fa-pen-line"></i>
            </div>
            <div class="presentation">
                <?php if($langue === "français")echo("<h3>Petite Présentation</h3>
                <p>Je m'apelle <span class='important'>Benjamin Lorieul</span>, jeune apprenti développeur web de 18 ans. <br></p>
                <p>J'adore coder des projets, construire des applications ou créer des algorithmes pour résoudre divers problèmes.</p>
                <p>Je suis principalement axé sur la création de <span class='important'>sites web</span> ainsi que de <span class='important'>solutions logicielles et applications</span>.</p>
                <p>J'ai appris majoritairement en auto-didacte avec <span class='important'>HTML5, CSS et PHP</span> et je suis aujourd'hui étudiant en 1ère année de <span class='important'>BTS SIO SLAM</span> dans la ville de Tours.</p>")?>
                <?php if($langue === "english")echo("<h3>Short introduction</h3>
                <p>I am <span class='important'>Benjamin Lorieul</span>, young apprentice web developer of 18 years.<br></p>
                <p>I love coding projects, building applications or creating algorithms to solve various problems.</p>
                <p>I am mainly focused on the creation of <span class='important'>websites</span> as well as <span class='important'>software solutions and applications</span>.</p>
                <p>I learned mostly in self-taught with <span class='important'>HTML5, CSS and PHP</span> and I am now a student in the 1st year of <span class='important'>BTS SIO SLAM</span> in the city of Tours.</p>")?>
            </div>
        </div>
        <div class="icone-down"><a href="#section-parcours"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a></div>        
    </section>