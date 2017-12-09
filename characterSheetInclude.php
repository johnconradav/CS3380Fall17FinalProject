<!-- NEED to create code that generates a Character ID number (as the db Primary Key) and spits it out to the user once a NEW character has been created -->






<?php
    //Check that the button was clicked
    if (isset($_POST['charIsClicked'])){ //if submit button returns true value then continue
        
//Anything I'm not sure how to change I will place in a comment all the way to the left like this...
//Connect to the db ---> NEED DIFFERENT DATABASE!!! Line below commented out until fixed
        //include_once 'dbInclude.php';
        
        //security check on the input text and throw it in a variable
        $charName = mysqli_real_escape_string($conn, $_POST['charName']);
        $charClass = mysqli_real_escape_string($conn, $_POST['charClass']);
        $charLevel = mysqli_real_escape_string($conn, $_POST['charLevel']);
        $charRace = mysqli_real_escape_string($conn, $_POST['charRace']);
        $charAlign = mysqli_real_escape_string($conn, $_POST['charAlign']);
        $charExp = mysqli_real_escape_string($conn, $_POST['charExp']);
        
        $charStrength = mysqli_real_escape_string($conn, $_POST['charStrength']);
        $charDexterity = mysqli_real_escape_string($conn, $_POST['charDexterity']);
        $charConstitution = mysqli_real_escape_string($conn, $_POST['charConstitution']);
        $charIntelligence = mysqli_real_escape_string($conn, $_POST['charIntelligence']);
        $charWisdom = mysqli_real_escape_string($conn, $_POST['charWisdom']);
        $charCharisma = mysqli_real_escape_string($conn, $_POST['charCharisma']);
        
        $charInspiration = mysqli_real_escape_string($conn, $_POST['charInspiration']);
        $charProfBonus = mysqli_real_escape_string($conn, $_POST['charProfBonus']);
        $charPassiveWisdom = mysqli_real_escape_string($conn, $_POST['charPassiveWisdom']);
        
        $charSTStrength = mysqli_real_escape_string($conn, $_POST['charSTStrength']);
        $charSTDexterity = mysqli_real_escape_string($conn, $_POST['charSTDexterity']);
        $charSTConstitution = mysqli_real_escape_string($conn, $_POST['charSTConstitution']);
        $charSTIntelligence = mysqli_real_escape_string($conn, $_POST['charSTIntelligence']);
        $charSTWisdom = mysqli_real_escape_string($conn, $_POST['charSTWisdom']);
        $charSTCharisma = mysqli_real_escape_string($conn, $_POST['charSTCharisma']);
        
        $charAcrobatics = mysqli_real_escape_string($conn, $_POST['charAcrobatics']);
        $charAnimalHandling = mysqli_real_escape_string($conn, $_POST['charAnimalHandling']);
        $charArcana = mysqli_real_escape_string($conn, $_POST['charArcana']);
        $charAthletics = mysqli_real_escape_string($conn, $_POST['charAthletics']);
        $charDeception = mysqli_real_escape_string($conn, $_POST['charDeception']);
        $charHistory = mysqli_real_escape_string($conn, $_POST['charHistory']);
        $charInsight = mysqli_real_escape_string($conn, $_POST['charInsight']);
        $charIntimidation = mysqli_real_escape_string($conn, $_POST['charIntimidation']);
        $charInvestigation = mysqli_real_escape_string($conn, $_POST['charInvestigation']);
        $charMedicine = mysqli_real_escape_string($conn, $_POST['charMedicine']);
        $charNature = mysqli_real_escape_string($conn, $_POST['charNature']);
        $charPerception = mysqli_real_escape_string($conn, $_POST['charPerception']);
        $charPerformance = mysqli_real_escape_string($conn, $_POST['charPerformance']);
        $charPersuasion = mysqli_real_escape_string($conn, $_POST['charPersuasion']);
        $charReligion = mysqli_real_escape_string($conn, $_POST['charReligion']);
        $charSleightOfHand = mysqli_real_escape_string($conn, $_POST['charSleightOfHand']);
        $charStealth = mysqli_real_escape_string($conn, $_POST['charStealth']);
        $charSurvival = mysqli_real_escape_string($conn, $_POST['charSurvival']);
        
        $charOtherP0 = mysqli_real_escape_string($conn, $_POST['charOtherP0']);
        $charOtherP1 = mysqli_real_escape_string($conn, $_POST['charOtherP1']);
        $charOtherP2 = mysqli_real_escape_string($conn, $_POST['charOtherP2']);
        $charOtherP3 = mysqli_real_escape_string($conn, $_POST['charOtherP3']);
        $charOtherP4 = mysqli_real_escape_string($conn, $_POST['charOtherP4']);
        $charOtherP5 = mysqli_real_escape_string($conn, $_POST['charOtherP5']);
        $charOtherP6 = mysqli_real_escape_string($conn, $_POST['charOtherP6']);
        $charOtherP7 = mysqli_real_escape_string($conn, $_POST['charOtherP7']);
        $charOtherP8 = mysqli_real_escape_string($conn, $_POST['charOtherP8']);
        $charOtherP9 = mysqli_real_escape_string($conn, $_POST['charOtherP9']);
        
        $charArmorClass = mysqli_real_escape_string($conn, $_POST['charArmorClass']);
        $charInitiative = mysqli_real_escape_string($conn, $_POST['charInitiative']);
        $charSpeed = mysqli_real_escape_string($conn, $_POST['charSpeed']);
        
        $charHPMax = mysqli_real_escape_string($conn, $_POST['charHPMax']);
        $charHPCurrent = mysqli_real_escape_string($conn, $_POST['charHPCurrent']);
        $charHPTemporary = mysqli_real_escape_string($conn, $_POST['charHPTemporary']);
        
        $charHitDiceTotal = mysqli_real_escape_string($conn, $_POST['charHitDiceTotal']);
        $charHitDice = mysqli_real_escape_string($conn, $_POST['charHitDice']);
        
        $charDSSuccesses = mysqli_real_escape_string($conn, $_POST['charDSSuccesses']);
        $charDSFailures = mysqli_real_escape_string($conn, $_POST['charDSFailures']);
        
        $Attack0 = mysqli_real_escape_string($conn, $_POST['Attack0']);
        $Attack1 = mysqli_real_escape_string($conn, $_POST['Attack1']);
        $Attack2 = mysqli_real_escape_string($conn, $_POST['Attack2']);
        $Attack3 = mysqli_real_escape_string($conn, $_POST['Attack3']);
        $Attack4 = mysqli_real_escape_string($conn, $_POST['Attack4']);
        $Attack5 = mysqli_real_escape_string($conn, $_POST['Attack5']);
        $Attack6 = mysqli_real_escape_string($conn, $_POST['Attack6']);
        $Attack7 = mysqli_real_escape_string($conn, $_POST['Attack7']);
        $Attack8 = mysqli_real_escape_string($conn, $_POST['Attack8']);
        $Attack9 = mysqli_real_escape_string($conn, $_POST['Attack9']);
        $Attack10 = mysqli_real_escape_string($conn, $_POST['Attack10']);
        $Attack11 = mysqli_real_escape_string($conn, $_POST['Attack11']);
        $Attack12 = mysqli_real_escape_string($conn, $_POST['Attack12']);
        
        $CP = mysqli_real_escape_string($conn, $_POST['CP']);
        $SP = mysqli_real_escape_string($conn, $_POST['SP']);
        $EP = mysqli_real_escape_string($conn, $_POST['EP']);
        $GP = mysqli_real_escape_string($conn, $_POST['GP']);
        $PP = mysqli_real_escape_string($conn, $_POST['PP']);
            
        $Equip0 = mysqli_real_escape_string($conn, $_POST['Equip0']);
        $Equip1 = mysqli_real_escape_string($conn, $_POST['Equip1']);
        $Equip2 = mysqli_real_escape_string($conn, $_POST['Equip2']);
        $Equip3 = mysqli_real_escape_string($conn, $_POST['Equip3']);
        $Equip4 = mysqli_real_escape_string($conn, $_POST['Equip4']);
        $Equip5 = mysqli_real_escape_string($conn, $_POST['Equip5']);
        $Equip6 = mysqli_real_escape_string($conn, $_POST['Equip6']);
        $Equip7 = mysqli_real_escape_string($conn, $_POST['Equip7']);
        $Equip8 = mysqli_real_escape_string($conn, $_POST['Equip8']);
        $Equip9 = mysqli_real_escape_string($conn, $_POST['Equip9']);
        $Equip10 = mysqli_real_escape_string($conn, $_POST['Equip10']);
        $Equip11 = mysqli_real_escape_string($conn, $_POST['Equip11']);
        $Equip12 = mysqli_real_escape_string($conn, $_POST['Equip12']);
        $Equip13 = mysqli_real_escape_string($conn, $_POST['Equip13']);
        $Equip14 = mysqli_real_escape_string($conn, $_POST['Equip14']);
        
        $PersonalityTraits0 = mysqli_real_escape_string($conn, $_POST['PersonalityTraits0']);
        $PersonalityTraits1 = mysqli_real_escape_string($conn, $_POST['PersonalityTraits1']);
        $PersonalityTraits2 = mysqli_real_escape_string($conn, $_POST['PersonalityTraits2']);
        $PersonalityTraits3 = mysqli_real_escape_string($conn, $_POST['PersonalityTraits3']);
        
        $Ideals0 = mysqli_real_escape_string($conn, $_POST['Ideals0']);
        $Ideals1 = mysqli_real_escape_string($conn, $_POST['Ideals1']);
        $Ideals2 = mysqli_real_escape_string($conn, $_POST['Ideals2']);
        
        $Bonds0 = mysqli_real_escape_string($conn, $_POST['Bonds0']);
        $Bonds1 = mysqli_real_escape_string($conn, $_POST['Bonds1']);
        $Bonds2 = mysqli_real_escape_string($conn, $_POST['Bonds2']);
        
        $Flaws0 = mysqli_real_escape_string($conn, $_POST['Flaws0']);
        $Flaws1 = mysqli_real_escape_string($conn, $_POST['Flaws1']);
        $Flaws2 = mysqli_real_escape_string($conn, $_POST['Flaws2']);
        
        $FAT0 = mysqli_real_escape_string($conn, $_POST['FAT0']);
        $FAT1 = mysqli_real_escape_string($conn, $_POST['FAT1']);
        $FAT2 = mysqli_real_escape_string($conn, $_POST['FAT2']);
        $FAT3 = mysqli_real_escape_string($conn, $_POST['FAT3']);
        $FAT4 = mysqli_real_escape_string($conn, $_POST['FAT4']);
        $FAT5 = mysqli_real_escape_string($conn, $_POST['FAT5']);
        $FAT6 = mysqli_real_escape_string($conn, $_POST['FAT6']);
        $FAT7 = mysqli_real_escape_string($conn, $_POST['FAT7']);
        $FAT8 = mysqli_real_escape_string($conn, $_POST['FAT8']);
        $FAT9 = mysqli_real_escape_string($conn, $_POST['FAT9']);
        $FAT10 = mysqli_real_escape_string($conn, $_POST['FAT10']);
        $FAT11 = mysqli_real_escape_string($conn, $_POST['FAT11']);
        $FAT12 = mysqli_real_escape_string($conn, $_POST['FAT12']);
        $FAT13 = mysqli_real_escape_string($conn, $_POST['FAT13']);
        $FAT14 = mysqli_real_escape_string($conn, $_POST['FAT14']);
        $FAT15 = mysqli_real_escape_string($conn, $_POST['FAT15']);
        $FAT16 = mysqli_real_escape_string($conn, $_POST['FAT16']);
        $FAT17 = mysqli_real_escape_string($conn, $_POST['FAT17']);
        $FAT18 = mysqli_real_escape_string($conn, $_POST['FAT18']);
        $FAT19 = mysqli_real_escape_string($conn, $_POST['FAT19']);

        //Well that was awful... and there's so much more to do... :(
        
        //Checks if any of the *Character Bio* input fields are empty
        if (empty($charName) || empty($charClass) || empty($charLevel) || empty($charRace) || empty($charAlign) || empty($charExp) || empty($charStrenght) || empty($charDexterity) || empty($charConstitution) || empty($charIntelligence) || empty($charWisdom) || empty($charCharisma)) {
            header("Location: ../characterSheet.php?characterSheet=empty"); //Print an error in the url bar
            exit(); // Bail
        }

// Guessed a little in the "Check to see if name is already taken" on how you'd organize the db, Nick...
        
        //Check to see if the character name is already taken
        else {
            $copyCharName = "SELECT * FROM characters WHERE charName='$charName'";
            $copyCharNameResult = mysqli_query($conn, $copyCharName); // run the above query
            $checkcopyCharNameResult = mysqli_num_rows($copyCharNameResult);
            
            if ($checkcopyCharNameResult > 0) {
                header("Location: ../characterSheet.php?characterSheet=charNameAlreadyTaken");
                exit();
            }
        }
        
// AGAIN guessing how you're going to organize the database
        
        //Taking the input field variables and priming for database insert
        $sql="INSERT INTO characters (charName, charClass, charLevel, charRace, charAlign, charExp, charStrength, charDexterity, charConstitution, charIntelligence, charWisdom, charCharisma, charInspiration, charProfBonus, charPassiveWisdom, charSTStrength, charSTDexterity, charSTConstitution, charSTIntelligence, charSTWisdom, charSTCharisma, charAcrobatics, charAnimalHandling, charArcana, charAthletics, charDeception, charHistory, charInsight, charIntimidation, charInvestigation, charMedicine, charNature, charPerception, charPerformance, charPersuasion, charReligion, charSleightOfHand, charStealth, charSurvival, charOtherP0, charOtherP1, charOtherP2, charOtherP3, charOtherP4, charOtherP5, charOtherP6, charOtherP7, charOtherP8, charOtherP9, charArmorClass, charInitiative, charSpeed, charHPMax, charHPCurrent, charHPTemporary, charHitDiceTotal, charHitDice, charDSSuccesses, charDSFailures, Attack0, Attack1, Attack2, Attack3, Attack4, Attack5, Attack6, Attack7, Attack8, Attack9, Attack10, Attack11, Attack12, CP, SP, EP, GP, PP, Equip0, Equip1, Equip2, Equip3, Equip4, Equip5, Equip6, Equip7, Equip8, Equip9, Equip10, Equip11, Equip12, Equip13, Equip14, PersonalityTraits0, PersonalityTraits1, PersonalityTraits2, PersonalityTraits3, PersonalityTraits4, Ideals0, Ideals1, Ideals2, Bonds0, Bonds1, Bonds2, Flaws0, Flaws1, Flaws2, FAT0, FAT1, FAT2, FAT3, FAT4, FAT5, FAT6, FAT7, FAT8, FAT9, FAT10, FAT11, FAT12, FAT13, FAT14, FAT15, FAT16, FAT17, FAT18, FAT19) VALUES ('$charName', '$charClass', '$charLevel', '$charRace', '$charAlign', '$charExp', '$charStrength', '$charDexterity', '$charConstitution', '$charIntelligence', '$charWisdom', '$charCharisma', '$charInspiration', '$charProfBonus', '$charPassiveWisdom', '$charSTStrength', '$charSTDexterity', '$charSTConstitution', '$charSTIntelligence', '$charSTWisdom', '$charSTCharisma', '$charAcrobatics', '$charAnimalHandling', '$charArcana', '$charAthletics', '$charDeception', '$charHistory', '$charInsight', '$charIntimidation', '$charInvestigation', '$charMedicine', '$charNature', '$charPerception', '$charPerformance', '$charPersuasion', '$charReligion', '$charSleightOfHand', '$charStealth', '$charSurvival', '$charOtherP0', '$charOtherP1', '$charOtherP2', '$charOtherP3', '$charOtherP4', '$charOtherP5', '$charOtherP6', '$charOtherP7', '$charOtherP8', '$charOtherP9', '$charArmorClass', '$charInitiative', '$charSpeed', '$charHPMax', '$charHPCurrent', '$charHPTemporary', '$charHitDiceTotal', '$charHitDice', '$charDSSuccesses', '$charDSFailures', '$Attack0', '$Attack1', '$Attack2', '$Attack3', '$Attack4', '$Attack5', '$Attack6', '$Attack7', '$Attack8', '$Attack9', '$Attack10', '$Attack11', '$Attack12', '$CP', '$SP', '$EP', '$GP', '$PP', '$Equip0', '$Equip1', '$Equip2', '$Equip3', '$Equip4', '$Equip5', '$Equip6', '$Equip7', '$Equip8', '$Equip9', '$Equip10', '$Equip11', '$Equip12', '$Equip13', '$Equip14', '$PersonalityTraits0', '$PersonalityTraits1', '$PersonalityTraits2', '$PersonalityTraits3', '$PersonalityTraits4', '$Ideals0', '$Ideals1', '$Ideals2', '$Bonds0', '$Bonds1', '$Bonds2', '$Flaws0', '$Flaws1', '$Flaws2', '$FAT0', '$FAT1', '$FAT2', '$FAT3', '$FAT4', '$FAT5', '$FAT6', '$FAT7', '$FAT8', '$FAT9', '$FAT10', '$FAT11', '$FAT12', '$FAT13', '$FAT14', '$FAT15', '$FAT16', '$FAT17', '$FAT18', '$FAT19')";
        
        //*panting*
        
        //Error check the query
        if(!mysqli_query($conn,$sql)) {
            die('Error: Still not fucking working' . mysqli_error($conn));
        }
        
        //If everything worked, redirect to google for confirmation
        header("Location: http://www.google.com");
        
        
    }