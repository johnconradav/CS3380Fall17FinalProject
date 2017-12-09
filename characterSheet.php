<?php
    include_once 'header.php';
?>

    <section class="charContainer">
        <div class="charWrapper">
            <h2>Character Sheet</h2>
            
            <!-- send information through post -->
            <form class="CharacterSheet" action="characterSheetInclude.php" method="post">
                <!-- Character Bio - TOP BAR -->
                <h3>Character Bio</h3>
                    <input type="text" name="charName" placeholder="Name">
                    <input type="text" name="charClass" placeholder="Class">
                    <input type="text" name="charLevel" placeholder="Level">
                    <input type="text" name="charRace" placeholder="Race">
                    <input type="text" name="charAlign" placeholder="Alignment">
                    <input type="text" name="charExp" placeholder="ExperiencePoints">
                <!-- Character Attributes - LEFT COLUMN -->
                <h3>Attributes</h3>
                    <input type="text" name="charStrength" placeholder="Strength">
                    <input type="text" name="charDexterity" placeholder="Dexterity">
                    <input type="text" name="charConstitution" placeholder="Constitution">
                    <input type="text" name="charIntelligence" placeholder="Intelligence">
                    <input type="text" name="charWisdom" placeholder="Wisdom">
                    <input type="text" name="charCharisma" placeholder="Charisma">
                
                <!-- LEFT MIDDLE COLUMN -->
                    <!-- Inspiration/Prof. Bonus/Passive Wisdom (Perception) -->
                    <h4>Inspiration</h4>
                    <input type="text" name="charInspiration" placeholder="Inspiration">
                    <h4>Proficiency Bonus</h4>
                    <input type="text" name="charProfBonus" placeholder="ProficiencyBonus">
                    <h4>Passive Wisdom</h4>
                    <input type="text" name="charPassiveWisdom" placeholder="PassiveWisdom">
                    <!-- Saving Throws -->
                    <h3>Saving Throws</h3>
                    <input type="text" name="charSTStrength" placeholder="Strength">
                    <input type="text" name="charSTDexterity" placeholder="Dexterity">
                    <input type="text" name="charSTConstitution" placeholder="Constitution">
                    <input type="text" name="charSTIntelligence" placeholder="Intelligence">
                    <input type="text" name="charSTWisdom" placeholder="Wisdom">
                    <input type="text" name="charSTCharisma" placeholder="Charisma">
                    <!-- Skills -->
                    <h3>Skills</h3>
                    <input type="text" name="charAcrobatics" placeholder="Acrobatics">
                    <input type="text" name="charAnimalHandling" placeholder="AnimalHandling">
                    <input type="text" name="charArcana" placeholder="Arcana">
                    <input type="text" name="charAthletics" placeholder="Athletics">
                    <input type="text" name="charDeception" placeholder="Deception">
                    <input type="text" name="charHistory" placeholder="History">
                    <input type="text" name="charInsight" placeholder="Insight">
                    <input type="text" name="charIntimidation" placeholder="Intimidation">
                    <input type="text" name="charInvestigation" placeholder="Investigation">
                    <input type="text" name="charMedicine" placeholder="Medicine">
                    <input type="text" name="charNature" placeholder="Nature">
                    <input type="text" name="charPerception" placeholder="Perception">
                    <input type="text" name="charPerformance" placeholder="Performance">
                    <input type="text" name="charPersuasion" placeholder="Persuasion">
                    <input type="text" name="charReligion" placeholder="Religion">
                    <input type="text" name="charSleightOfHand" placeholder="SleightOfHand">
                    <input type="text" name="charStealth" placeholder="Stealth">
                    <input type="text" name="charSurvival" placeholder="Survival">
                    <!-- Other Proficiencies and Languages -->
                    <h3>Other Proficiencies and Languages</h3>
                    <input type="text" name="charOtherP0" placeholder="0">
                    <input type="text" name="charOtherP1" placeholder="1">
                    <input type="text" name="charOtherP2" placeholder="2">
                    <input type="text" name="charOtherP3" placeholder="3">
                    <input type="text" name="charOtherP4" placeholder="4">
                    <input type="text" name="charOtherP5" placeholder="5">
                    <input type="text" name="charOtherP6" placeholder="6">
                    <input type="text" name="charOtherP7" placeholder="7">
                    <input type="text" name="charOtherP8" placeholder="8">
                    <input type="text" name="charOtherP9" placeholder="9">
                <!-- RIGHT MIDDLE COLUMN -->
                    <!-- Subgroup A -->
                        <!-- i. Armor Class, Initiative, and Speed -->
                        <h4>Armor Class</h4>
                        <input type="text" name="charArmorClass" placeholder="ArmorClass">
                        <h4>Initiative</h4>
                        <input type="text" name="charInitiative" placeholder="Initiative">
                        <h4>Speed</h4>
                        <input type="text" name="charSpeed" placeholder="Speed">
                        <!-- ii. Hit Points -->
                        <h3>Hit Points</h3>
                        <h4>Maximum</h4>
                        <input type="text" name="charHPMax" placeholder="HPMaximum">
                        <h4>Current</h4>
                        <input type="text" name="charHPCurrent" placeholder="HPCurrent">
                        <h4>Temporary</h4>
                        <input type="text" name="charHPTemporary" placeholder="HPTemporary">
                        <!-- iii. Hit Dice -->
                        <h4>HD Total</h4>
                        <input type="text" name="charHitDiceTotal" placeholder="HitDiceTotal">
                        <h4>Hit Dice</h4>
                        <input type="text" name="charHitDice" placeholder="HitDice">
                        <!-- iv. Death Saves -->
                        <h3>Death Saves</h3>
                        <h4>Successes (out of 3)</h4>
                        <input type="text" name="charDSSuccesses" placeholder="DSSuccesses">
                        <h4>Failures (out of 3)</h4>
                        <input type="text" name="charDSFailures" placeholder="DSFailures">
                    <!-- Subgroup B -->
                        <!-- Note for Formatting: Goes Box for Name, ATK Bonus, Damage/Type -->
                        <h3>Attacks and Spellcasting</h3>
                        <h4>Name                    ATK Bonus         Damage/Type</h4>
                        <input type="text" name="Attack0" placeholder="0">
                        <input type="text" name="Attack1" placeholder="1">
                        <input type="text" name="Attack2" placeholder="2">
                        <h4>Extra Lines</h4>
                        <input type="text" name="Attack3">
                        <input type="text" name="Attack4">
                        <input type="text" name="Attack5">
                        <input type="text" name="Attack6">
                        <input type="text" name="Attack7">
                        <input type="text" name="Attack8">
                        <input type="text" name="Attack9">
                        <input type="text" name="Attack10">
                        <input type="text" name="Attack11">
                        <input type="text" name="Attack12">
                    <!-- Subgroup C -->
                        <h3>Equipment</h3>
                        <h4>CP</h4>
                        <input type="text" name="CP">
                        <h4>SP</h4>
                        <input type="text" name="SP">
                        <h4>EP</h4>
                        <input type="text" name="EP">
                        <h4>GP</h4>
                        <input type="text" name="GP">
                        <h4>PP</h4>
                        <input type="text" name="PP">
                        <h4>Extra Lines</h4>
                        <input type="text" name="Equip0">
                        <input type="text" name="Equip1">
                        <input type="text" name="Equip2">
                        <input type="text" name="Equip3">
                        <input type="text" name="Equip4">
                        <input type="text" name="Equip5">
                        <input type="text" name="Equip6">
                        <input type="text" name="Equip7">
                        <input type="text" name="Equip8">
                        <input type="text" name="Equip9">
                        <input type="text" name="Equip10">
                        <input type="text" name="Equip11">
                        <input type="text" name="Equip12">
                        <input type="text" name="Equip13">
                        <input type="text" name="Equip14">
                <!-- RIGHT COLUMN -->
                        <!-- Subgroup A -->
                        <h3>Personality Traits</h3>
                        <input type="text" name="PersonalityTraits0">
                        <input type="text" name="PersonalityTraits1">
                        <input type="text" name="PersonalityTraits2">
                        <input type="text" name="PersonalityTraits3">
                        <h3>Ideals</h3>
                        <input type="text" name="Ideals0">
                        <input type="text" name="Ideals1">
                        <input type="text" name="Ideals2">
                        <h3>Bonds</h3>
                        <input type="text" name="Bonds0">
                        <input type="text" name="Bonds1">
                        <input type="text" name="Bonds2">
                        <h3>Flaws</h3>
                        <input type="text" name="Flaws0">
                        <input type="text" name="Flaws1">
                        <input type="text" name="Flaws2">
                        <!-- Subgroup B -->
                        <h3>Features and Traits</h3>
                        <input type="text" name="FAT0">
                        <input type="text" name="FAT1">
                        <input type="text" name="FAT2">
                        <input type="text" name="FAT3">
                        <input type="text" name="FAT4">
                        <input type="text" name="FAT5">
                        <input type="text" name="FAT6">
                        <input type="text" name="FAT7">
                        <input type="text" name="FAT8">
                        <input type="text" name="FAT9">
                        <input type="text" name="FAT10">
                        <input type="text" name="FAT11">
                        <input type="text" name="FAT12">
                        <input type="text" name="FAT13">
                        <input type="text" name="FAT14">
                        <input type="text" name="FAT15">
                        <input type="text" name="FAT16">
                        <input type="text" name="FAT17">
                        <input type="text" name="FAT18">
                        <input type="text" name="FAT19">
            
                        <button type="submit" name="charIsClicked">Save Character</button>
            </form>
                
        </div>
    </section>

<?php
    include_once 'footer.php';
?>