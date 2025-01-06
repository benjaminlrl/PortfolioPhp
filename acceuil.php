
        <!-- MAIN -->
        <div class="main-acceuil">
            <?php if($langue === "français")echo('
            <h2>Bonjour&nbsp;! <i class="fa-regular fa-hand-wave" style="color: #ffffff;"></i><br>Je suis Benjamin</h2>
            <p class="main-status"><span>Apprenti développeur web... </span></p>
            <div class="status">
                <p class="status-gauche">👨‍🎓 Apprenti</p>
                <p class="status-droite">&lt;/&gt; développeur</p>
            </div>')?>  
            <?php if($langue === "english")echo('
            <h2>Hello&nbsp;! <i class="fa-regular fa-hand-wave" style="color: #ffffff;"></i><br>I am Benjamin</h2>
            <p class="main-status"><span>Apprentice web developer... </span></p>
            <div class="status">
                <p class="status-gauche">👨‍🎓 Apprentice</p>
                <p class="status-droite">&lt;/&gt; Developer</p>
            </div>
            ')?> 
            <div class="icone-down"><a href="#section-presentation"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a></div>        
        </div>