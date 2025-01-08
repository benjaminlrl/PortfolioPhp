
        <!-- MAIN -->
<div class="main-acceuil">
    <?php if($langue === "français"): ?>
        <h2>Bonjour&nbsp;! <i class="fa-regular fa-hand-wave" style="color: #ffffff;"></i><br>Je suis Benjamin</h2>
            <div class="main-status" id="animatedText">&nbsp;</div>
        <!-- <div class="status">
            <p class="status-gauche">👨‍🎓 Apprenti</p>
            <p class="status-droite">&lt;/&gt; développeur</p>
        </div> -->
    <?php elseif($langue === "english"): ?>
        <h2>Hello&nbsp;! <i class="fa-regular fa-hand-wave" style="color: #ffffff;"></i><br>I am Benjamin</h2>
            <div class="main-status" id="animatedText">&nbsp;</div>
        <!-- <div class="status">
            <p class="status-gauche">👨‍🎓 Apprentice</p>
            <p class="status-droite">&lt;/&gt; Developer</p>
        </div> -->
    <?php endif; ?>
    <div class="icone-down">
        <a href="#section-presentation"><i class="fa-solid fa-arrow-down fa-bounce fa-2xl"></i></a>
    </div>        
</div>
<script src="script.js"></script>
<script>
    const animatedTextElement = document.getElementById("animatedText");
    if (animatedTextElement) {
        const textList = <?php echo $langue === "français" ? 
            '["Apprenti developpeur web...", "Etudiant en alternance...", "Explorez mon portfolio !.."]' : 
            '["Hello, welcome to this page!", "I am an apprentice developer.", "Check out my portfolio!"]'; ?>;

        setTimeout(() => {
            animateTexts("animatedText", textList, 100, 1500);
        }, 2100);
    }
</script>

        