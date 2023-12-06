<?php
if (!isset($badWords) || empty($badWords)) {
    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
}
if (!isset($badPhrases) || empty($badPhrases)) {
    $badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );
}
$badWords['badWords'] = array_merge_recursive($badWords['badWords'], array (
  'p' => true,
  'l' => true,
  'ps' => true,
  'pi' => true,
  'pa' => true,
  'lp' => true,
  'le' => true,
  'al' => true,
  'bt' => true,
  'cn' => true,
  'ep' => true,
  'gï' => true,
  'kk' => true,
  'nc' => true,
  'ns' => true,
  'nz' => true,
  'pu' => true,
  'pd' => true,
  'pt' => true,
  'pk' => true,
  'sl' => true,
  'tb' => true,
  'tg' => true,
  'vd' => true,
  'vr' => true,
  'ép' => true,
  'mpf' => true,
  'nfr' => true,
  'pis' => true,
  'pas' => true,
  'pai' => true,
  'trn' => true,
  'gun' => true,
  'lpe' => true,
  'lud' => true,
  'lop' => true,
  'alp' => true,
  'ale' => true,
  'bct' => true,
  'bte' => true,
  'buf' => true,
  'bat' => true,
  'bit' => true,
  'cch' => true,
  'cne' => true,
  'cna' => true,
  'cnn' => true,
  'cns' => true,
  'ccu' => true,
  'cfr' => true,
  'chr' => true,
  'chg' => true,
  'con' => true,
  'coq' => true,
  'cré' => true,
  'dbl' => true,
  'eps' => true,
  'epi' => true,
  'epa' => true,
  'ftt' => true,
  'fdp' => true,
  'fif' => true,
  'gdn' => true,
  'ggl' => true,
  'grc' => true,
  'gup' => true,
  'gdm' => true,
  'goï' => true,
  'kku' => true,
  'kik' => true,
  'mnu' => true,
  'mrd' => true,
  'mgt' => true,
  'nux' => true,
  'nku' => true,
  'nac' => true,
  'nqu' => true,
  'ngr' => true,
  'nse' => true,
  'nze' => true,
  'nas' => true,
  'naz' => true,
  'nic' => true,
  'ntm' => true,
  'prc' => true,
  'puf' => true,
  'pou' => true,
  'pdl' => true,
  'pta' => true,
  'pks' => true,
  'pko' => true,
  'pak' => true,
  'pet' => true,
  'piu' => true,
  'pun' => true,
  'put' => true,
  'pét' => true,
  'rbf' => true,
  'rpp' => true,
  'rtn' => true,
  'slp' => true,
  'sle' => true,
  'sal' => true,
  'tbe' => true,
  'tbé' => true,
  'tub' => true,
  'tfl' => true,
  'toé' => true,
  'tru' => true,
  'vds' => true,
  'vda' => true,
  'ved' => true,
  'ver' => true,
  'véd' => true,
  'vid' => true,
  'vir' => true,
  'yud' => true,
  'yul' => true,
  'zut' => true,
  'éps' => true,
  'épi' => true,
  'épa' => true,
  'mbcl' => true,
  'pngn' => true,
  'mpfe' => true,
  'mpfé' => true,
  'mpaf' => true,
  'ncul' => true,
  'nfre' => true,
  'nfré' => true,
  'nfir' => true,
  'nfor' => true,
  'pais' => true,
  'tron' => true,
  'ttux' => true,
  'umrd' => true,
  'ntlp' => true,
  'guin' => true,
  'goun' => true,
  'lprd' => true,
  'lope' => true,
  'agun' => true,
  'alpe' => true,
  'alop' => true,
  'chbb' => true,
  'chlu' => true,
  'chnc' => true,
  'trqu' => true,
  'brut' => true,
  'vrtn' => true,
  'brdl' => true,
  'bugr' => true,
  'bukk' => true,
  'btch' => true,
  'bcot' => true,
  'btmb' => true,
  'bauf' => true,
  'btrd' => true,
  'beuf' => true,
  'bict' => true,
  'bise' => true,
  'bite' => true,
  'bout' => true,
  'cche' => true,
  'cnrd' => true,
  'cnss' => true,
  'cnae' => true,
  'cnne' => true,
  'cnna' => true,
  'cull' => true,
  'ccou' => true,
  'cfre' => true,
  'cacu' => true,
  'cafr' => true,
  'cave' => true,
  'chnn' => true,
  'chur' => true,
  'cher' => true,
  'chge' => true,
  'chat' => true,
  'chir' => true,
  'chié' => true,
  'coch' => true,
  'coin' => true,
  'cone' => true,
  'cona' => true,
  'conn' => true,
  'cons' => true,
  'coqs' => true,
  'crtt' => true,
  'crcr' => true,
  'crtn' => true,
  'cran' => true,
  'culs' => true,
  'culé' => true,
  'dbil' => true,
  'debl' => true,
  'djoc' => true,
  'does' => true,
  'ducn' => true,
  'débl' => true,
  'epis' => true,
  'epas' => true,
  'epai' => true,
  'esti' => true,
  'etrn' => true,
  'ftte' => true,
  'futr' => true,
  'fott' => true,
  'fitt' => true,
  'fifi' => true,
  'fion' => true,
  'frtz' => true,
  'fumr' => true,
  'gune' => true,
  'gurd' => true,
  'grce' => true,
  'gupe' => true,
  'garc' => true,
  'gaup' => true,
  'glnd' => true,
  'gnul' => true,
  'goof' => true,
  'grgn' => true,
  'gros' => true,
  'kkoo' => true,
  'kkou' => true,
  'kiku' => true,
  'krut' => true,
  'lptt' => true,
  'lvtt' => true,
  'mnll' => true,
  'mrbl' => true,
  'mcht' => true,
  'mnbl' => true,
  'mnus' => true,
  'mgot' => true,
  'mkum' => true,
  'mnch' => true,
  'magt' => true,
  'meuf' => true,
  'minu' => true,
  'neux' => true,
  'nsux' => true,
  'nkue' => true,
  'nkué' => true,
  'nkou' => true,
  'naux' => true,
  'naku' => true,
  'nqur' => true,
  'nque' => true,
  'ngro' => true,
  'nana' => true,
  'nase' => true,
  'naze' => true,
  'negr' => true,
  'niku' => true,
  'niac' => true,
  'niqu' => true,
  'négr' => true,
  'osti' => true,
  'prce' => true,
  'prcs' => true,
  'prca' => true,
  'pucv' => true,
  'pufe' => true,
  'pufa' => true,
  'puff' => true,
  'pufi' => true,
  'pund' => true,
  'pssu' => true,
  'pcqu' => true,
  'pdqu' => true,
  'pdal' => true,
  'ptux' => true,
  'ptss' => true,
  'pkos' => true,
  'ptrn' => true,
  'paks' => true,
  'pako' => true,
  'pedl' => true,
  'pede' => true,
  'pete' => true,
  'peta' => true,
  'piou' => true,
  'pine' => true,
  'pipe' => true,
  'pluc' => true,
  'poil' => true,
  'porc' => true,
  'pouf' => true,
  'pune' => true,
  'puns' => true,
  'puni' => true,
  'puna' => true,
  'putn' => true,
  'pute' => true,
  'pédl' => true,
  'pédé' => true,
  'péte' => true,
  'péta' => true,
  'rbif' => true,
  'rsbf' => true,
  'rppe' => true,
  'rppé' => true,
  'rpop' => true,
  'rton' => true,
  'rage' => true,
  'ratn' => true,
  'ripp' => true,
  'robf' => true,
  'râpé' => true,
  'sgun' => true,
  'slpr' => true,
  'slpe' => true,
  'slud' => true,
  'slop' => true,
  'salp' => true,
  'sale' => true,
  'sexe' => true,
  'suce' => true,
  'tcrd' => true,
  'tube' => true,
  'tubé' => true,
  'tfle' => true,
  'tfol' => true,
  'tfil' => true,
  'tptt' => true,
  'tafl' => true,
  'tata' => true,
  'tebe' => true,
  'tebé' => true,
  'tepu' => true,
  'teub' => true,
  'teuf' => true,
  'tool' => true,
  'trin' => true,
  'trîn' => true,
  'tran' => true,
  'true' => true,
  'trua' => true,
  'trui' => true,
  'vdas' => true,
  'vede' => true,
  'veds' => true,
  'veda' => true,
  'véde' => true,
  'véds' => true,
  'véda' => true,
  'vurn' => true,
  'vids' => true,
  'vida' => true,
  'vied' => true,
  'vier' => true,
  'viol' => true,
  'viéd' => true,
  'vtff' => true,
  'yupn' => true,
  'yutr' => true,
  'youd' => true,
  'youp' => true,
  'zizi' => true,
  'épis' => true,
  'épas' => true,
  'épai' => true,
  'étrn' => true,
  'mbecl' => true,
  'mbécl' => true,
  'pngon' => true,
  'mmrdr' => true,
  'mmrdu' => true,
  'mmnch' => true,
  'mpput' => true,
  'mpafe' => true,
  'mpafé' => true,
  'nculr' => true,
  'ncule' => true,
  'nculé' => true,
  'nfire' => true,
  'nfiré' => true,
  'nflur' => true,
  'nfore' => true,
  'nforé' => true,
  'nfoir' => true,
  'spngn' => true,
  'tteux' => true,
  'ttiux' => true,
  'ntlpi' => true,
  'ntlap' => true,
  'gouin' => true,
  'loprd' => true,
  'trull' => true,
  'aguin' => true,
  'agoun' => true,
  'alaud' => true,
  'alope' => true,
  'chbeb' => true,
  'chleu' => true,
  'chnck' => true,
  'chnqu' => true,
  'chnoc' => true,
  'ottux' => true,
  'oumrd' => true,
  'triqu' => true,
  'tarqu' => true,
  'terqu' => true,
  'térqu' => true,
  'bruti' => true,
  'ndull' => true,
  'abrut' => true,
  'argya' => true,
  'avrtn' => true,
  'brdel' => true,
  'buffn' => true,
  'bugre' => true,
  'bukak' => true,
  'bunul' => true,
  'busux' => true,
  'batch' => true,
  'btmbs' => true,
  'btmbo' => true,
  'btemb' => true,
  'baise' => true,
  'batte' => true,
  'beauf' => true,
  'bitch' => true,
  'bicot' => true,
  'bifle' => true,
  'bique' => true,
  'bitte' => true,
  'bonne' => true,
  'bordl' => true,
  'bougr' => true,
  'boukk' => true,
  'boule' => true,
  'brnlr' => true,
  'brnqu' => true,
  'bride' => true,
  'brêle' => true,
  'bâtrd' => true,
  'bâton' => true,
  'cnsse' => true,
  'cnard' => true,
  'cnass' => true,
  'cnchr' => true,
  'cnnrd' => true,
  'cnnss' => true,
  'cnnae' => true,
  'culln' => true,
  'culls' => true,
  'cuill' => true,
  'cunfl' => true,
  'cbnbn' => true,
  'ccull' => true,
  'cldch' => true,
  'cacou' => true,
  'cafre' => true,
  'cahba' => true,
  'chnna' => true,
  'churs' => true,
  'cheur' => true,
  'chntc' => true,
  'chntk' => true,
  'chchr' => true,
  'chgss' => true,
  'chaga' => true,
  'chinn' => true,
  'chiur' => true,
  'chiée' => true,
  'chluh' => true,
  'clito' => true,
  'coche' => true,
  'conrd' => true,
  'conss' => true,
  'conae' => true,
  'conne' => true,
  'conna' => true,
  'corné' => true,
  'crtte' => true,
  'crtté' => true,
  'crull' => true,
  'crûtn' => true,
  'crtin' => true,
  'crvrd' => true,
  'crvur' => true,
  'cretn' => true,
  'crime' => true,
  'criss' => true,
  'crott' => true,
  'crétn' => true,
  'culer' => true,
  'culée' => true,
  'dmrdr' => true,
  'damné' => true,
  'deble' => true,
  'debil' => true,
  'digue' => true,
  'dinde' => true,
  'drull' => true,
  'duché' => true,
  'ducon' => true,
  'déble' => true,
  'débil' => true,
  'epngn' => true,
  'empfe' => true,
  'empfé' => true,
  'enfre' => true,
  'enfré' => true,
  'enfer' => true,
  'epais' => true,
  'esque' => true,
  'estie' => true,
  'etron' => true,
  'futur' => true,
  'futre' => true,
  'fotte' => true,
  'fgnss' => true,
  'faire' => true,
  'fente' => true,
  'fesse' => true,
  'fitte' => true,
  'fiott' => true,
  'flûte' => true,
  'foiré' => true,
  'folle' => true,
  'foune' => true,
  'foutr' => true,
  'fritz' => true,
  'fumer' => true,
  'fumir' => true,
  'guine' => true,
  'gurde' => true,
  'garce' => true,
  'gaupe' => true,
  'gerbe' => true,
  'glndu' => true,
  'gland' => true,
  'gnule' => true,
  'gnoul' => true,
  'godes' => true,
  'godon' => true,
  'gogol' => true,
  'gorby' => true,
  'gosse' => true,
  'goune' => true,
  'gourd' => true,
  'grgne' => true,
  'grgna' => true,
  'grogn' => true,
  'gunch' => true,
  'jante' => true,
  'jouir' => true,
  'kikoo' => true,
  'kikou' => true,
  'lchux' => true,
  'lavtt' => true,
  'limer' => true,
  'loptt' => true,
  'mnlle' => true,
  'mnall' => true,
  'mncll' => true,
  'mrcud' => true,
  'mrabl' => true,
  'merbl' => true,
  'mérbl' => true,
  'mchto' => true,
  'mnble' => true,
  'mnabl' => true,
  'msrbl' => true,
  'mrdux' => true,
  'mrdll' => true,
  'mkume' => true,
  'mkumé' => true,
  'mkoum' => true,
  'mnche' => true,
  'muvtt' => true,
  'magot' => true,
  'makum' => true,
  'malpt' => true,
  'mance' => true,
  'manch' => true,
  'marde' => true,
  'matos' => true,
  'melon' => true,
  'mirbl' => true,
  'micht' => true,
  'minbl' => true,
  'mince' => true,
  'minou' => true,
  'minus' => true,
  'monll' => true,
  'morue' => true,
  'moule' => true,
  'nseux' => true,
  'nkoue' => true,
  'nkoué' => true,
  'naeux' => true,
  'nasux' => true,
  'nakue' => true,
  'nakué' => true,
  'nakou' => true,
  'nquer' => true,
  'niiux' => true,
  'nikue' => true,
  'nikué' => true,
  'nikou' => true,
  'niaku' => true,
  'niqur' => true,
  'noune' => true,
  'nègre' => true,
  'négro' => true,
  'orgie' => true,
  'ostie' => true,
  'prcss' => true,
  'prcae' => true,
  'prcas' => true,
  'pucav' => true,
  'pufss' => true,
  'pufae' => true,
  'puffe' => true,
  'puffa' => true,
  'puffi' => true,
  'pufie' => true,
  'pufia' => true,
  'punde' => true,
  'pundé' => true,
  'pgnuf' => true,
  'pssux' => true,
  'pssou' => true,
  'pdoqu' => true,
  'ptass' => true,
  'pnufl' => true,
  'ptrin' => true,
  'pakos' => true,
  'pedqu' => true,
  'pedle' => true,
  'pedal' => true,
  'peler' => true,
  'petss' => true,
  'piner' => true,
  'pissu' => true,
  'plutr' => true,
  'plouc' => true,
  'plume' => true,
  'poche' => true,
  'porce' => true,
  'porcs' => true,
  'porca' => true,
  'poucv' => true,
  'poufe' => true,
  'poufa' => true,
  'pouff' => true,
  'poufi' => true,
  'pound' => true,
  'punse' => true,
  'punie' => true,
  'punis' => true,
  'punae' => true,
  'punas' => true,
  'punai' => true,
  'purée' => true,
  'putin' => true,
  'putan' => true,
  'pédqu' => true,
  'pédle' => true,
  'pédal' => true,
  'pélot' => true,
  'pénis' => true,
  'pépom' => true,
  'pétss' => true,
  'pétae' => true,
  'péter' => true,
  'queue' => true,
  'rsbif' => true,
  'rulur' => true,
  'rppee' => true,
  'rppée' => true,
  'rpope' => true,
  'rpopé' => true,
  'rclur' => true,
  'raton' => true,
  'rippe' => true,
  'rippé' => true,
  'ripop' => true,
  'robif' => true,
  'rosbf' => true,
  'sguin' => true,
  'sgoun' => true,
  'slpri' => true,
  'slprd' => true,
  'slope' => true,
  'sacré' => true,
  'sagun' => true,
  'saint' => true,
  'salpe' => true,
  'salop' => true,
  'sarce' => true,
  'schbb' => true,
  'schlu' => true,
  'schnc' => true,
  'seins' => true,
  'sieve' => true,
  'strqu' => true,
  'tcard' => true,
  'tfole' => true,
  'tfile' => true,
  'tfiol' => true,
  'tntur' => true,
  'tntuz' => true,
  'trluz' => true,
  'tafle' => true,
  'tafol' => true,
  'tafil' => true,
  'tanné' => true,
  'taptt' => true,
  'taper' => true,
  'tarte' => true,
  'taspé' => true,
  'techa' => true,
  'tetux' => true,
  'teube' => true,
  'teubé' => true,
  'teuch' => true,
  'tocrd' => true,
  'toton' => true,
  'trnee' => true,
  'trîne' => true,
  'trîné' => true,
  'train' => true,
  'traîn' => true,
  'treuf' => true,
  'truss' => true,
  'truae' => true,
  'truie' => true,
  'truia' => true,
  'tuyau' => true,
  'tâter' => true,
  'tétux' => true,
  'vedse' => true,
  'vedae' => true,
  'vedas' => true,
  'védse' => true,
  'védae' => true,
  'védas' => true,
  'vuren' => true,
  'vurin' => true,
  'vache' => true,
  'vagin' => true,
  'vaurn' => true,
  'veuve' => true,
  'vidas' => true,
  'viede' => true,
  'vieds' => true,
  'vieda' => true,
  'violé' => true,
  'viéde' => true,
  'viéds' => true,
  'viéda' => true,
  'yupne' => true,
  'yupin' => true,
  'yutre' => true,
  'yeule' => true,
  'youpn' => true,
  'youtr' => true,
  'zboob' => true,
  'zgugu' => true,
  'épais' => true,
  'étole' => true,
  'étron' => true,
  'mbecle' => true,
  'mbécle' => true,
  'pingin' => true,
  'mmrdur' => true,
  'mmrdus' => true,
  'mmnche' => true,
  'mmnché' => true,
  'mmanch' => true,
  'mppute' => true,
  'mpputé' => true,
  'mppout' => true,
  'nculur' => true,
  'nfoire' => true,
  'nfoiré' => true,
  'nvlnur' => true,
  'spngon' => true,
  'ttieux' => true,
  'umerde' => true,
  'ntlapi' => true,
  'trulle' => true,
  'truill' => true,
  'troull' => true,
  'agouin' => true,
  'alpard' => true,
  'atrull' => true,
  'chnque' => true,
  'chnock' => true,
  'chnoqu' => true,
  'entlpe' => true,
  'otteux' => true,
  'ottiux' => true,
  'tariqu' => true,
  'terque' => true,
  'teriqu' => true,
  'tearqu' => true,
  'térque' => true,
  'tériqu' => true,
  'téarqu' => true,
  'ndulle' => true,
  'nduill' => true,
  'ndoull' => true,
  'vorton' => true,
  'abruti' => true,
  'andull' => true,
  'bugnul' => true,
  'buniul' => true,
  'burdll' => true,
  'buseux' => true,
  'btmbos' => true,
  'btembs' => true,
  'btembo' => true,
  'baiser' => true,
  'baisée' => true,
  'bander' => true,
  'benzer' => true,
  'bibite' => true,
  'biffle' => true,
  'bifler' => true,
  'bitmbi' => true,
  'bonyeu' => true,
  'bordel' => true,
  'bosser' => true,
  'bougre' => true,
  'boukak' => true,
  'bourré' => true,
  'bousux' => true,
  'brburn' => true,
  'brnlur' => true,
  'brnler' => true,
  'brnque' => true,
  'branlr' => true,
  'branlo' => true,
  'branqu' => true,
  'bushed' => true,
  'bâtard' => true,
  'cnasse' => true,
  'cncher' => true,
  'cnchir' => true,
  'cnnrde' => true,
  'cnnsse' => true,
  'cnnard' => true,
  'cnnass' => true,
  'cuilln' => true,
  'cuills' => true,
  'cuille' => true,
  'cunfle' => true,
  'cunifl' => true,
  'curtud' => true,
  'ccuill' => true,
  'ccoull' => true,
  'cebnbn' => true,
  'cldche' => true,
  'cldoch' => true,
  'cabnbn' => true,
  'cacull' => true,
  'caldch' => true,
  'calice' => true,
  'cerise' => true,
  'chnnss' => true,
  'chenne' => true,
  'cheurs' => true,
  'chntqu' => true,
  'chntoc' => true,
  'chnetc' => true,
  'chntok' => true,
  'chgsse' => true,
  'chagae' => true,
  'chatte' => true,
  'chette' => true,
  'chinna' => true,
  'chiurs' => true,
  'chiant' => true,
  'chibre' => true,
  'chieur' => true,
  'chintc' => true,
  'chintk' => true,
  'chleuh' => true,
  'choper' => true,
  'choune' => true,
  'christ' => true,
  'clille' => true,
  'coliss' => true,
  'consse' => true,
  'conard' => true,
  'conass' => true,
  'conchr' => true,
  'connrd' => true,
  'connss' => true,
  'connae' => true,
  'coulle' => true,
  'couill' => true,
  'counfl' => true,
  'crullt' => true,
  'crulle' => true,
  'cruill' => true,
  'crvard' => true,
  'crevrd' => true,
  'cricri' => true,
  'criffe' => true,
  'crisse' => true,
  'crosse' => true,
  'crotté' => true,
  'croull' => true,
  'croupe' => true,
  'crétin' => true,
  'culeur' => true,
  'câlice' => true,
  'céoène' => true,
  'dgulss' => true,
  'debile' => true,
  'doeser' => true,
  'drulle' => true,
  'druill' => true,
  'drague' => true,
  'droull' => true,
  'ducnnt' => true,
  'dugnux' => true,
  'duglnd' => true,
  'débile' => true,
  'dégage' => true,
  'epngon' => true,
  'empafe' => true,
  'empafé' => true,
  'enculé' => true,
  'enfire' => true,
  'enfiré' => true,
  'enfler' => true,
  'enfore' => true,
  'enforé' => true,
  'espngn' => true,
  'esprit' => true,
  'futeur' => true,
  'fignss' => true,
  'fiotte' => true,
  'foirée' => true,
  'foutur' => true,
  'fumier' => true,
  'gullnd' => true,
  'gerber' => true,
  'glndur' => true,
  'glndus' => true,
  'glandu' => true,
  'glaoui' => true,
  'gnasse' => true,
  'gniouf' => true,
  'gnoule' => true,
  'gouine' => true,
  'gourde' => true,
  'gousse' => true,
  'grgnss' => true,
  'grgnae' => true,
  'graine' => true,
  'grogne' => true,
  'grogna' => true,
  'gundul' => true,
  'gunich' => true,
  'guenon' => true,
  'gueule' => true,
  'hostie' => true,
  'idiote' => true,
  'imbcil' => true,
  'jnfutr' => true,
  'keener' => true,
  'lpette' => true,
  'lcheux' => true,
  'lvette' => true,
  'lachux' => true,
  'latter' => true,
  'luxure' => true,
  'lâchux' => true,
  'mnqurn' => true,
  'mnalle' => true,
  'minill' => true,
  'mnclle' => true,
  'mncill' => true,
  'mrcaud' => true,
  'mricud' => true,
  'merble' => true,
  'merabl' => true,
  'mérble' => true,
  'mérabl' => true,
  'mnable' => true,
  'msrabl' => true,
  'mserbl' => true,
  'msérbl' => true,
  'mrdlln' => true,
  'mrdill' => true,
  'mrdall' => true,
  'mkoume' => true,
  'mkoumé' => true,
  'mngmrd' => true,
  'muvitt' => true,
  'makume' => true,
  'makumé' => true,
  'makoum' => true,
  'manche' => true,
  'maudit' => true,
  'mauvtt' => true,
  'mercon' => true,
  'merder' => true,
  'mettre' => true,
  'mirabl' => true,
  'mierbl' => true,
  'miérbl' => true,
  'michto' => true,
  'mijole' => true,
  'minble' => true,
  'minabl' => true,
  'misrbl' => true,
  'monlle' => true,
  'monall' => true,
  'moncll' => true,
  'morcud' => true,
  'mouron' => true,
  'naseux' => true,
  'nakoue' => true,
  'nakoué' => true,
  'niieux' => true,
  'niisux' => true,
  'nikoue' => true,
  'nikoué' => true,
  'niaiux' => true,
  'niakue' => true,
  'niakué' => true,
  'niakou' => true,
  'niquer' => true,
  'nulach' => true,
  'nymphe' => true,
  'nègres' => true,
  'ordure' => true,
  'prcsse' => true,
  'prcass' => true,
  'pufsse' => true,
  'pufass' => true,
  'puffss' => true,
  'puffae' => true,
  'puffie' => true,
  'puffia' => true,
  'pufiss' => true,
  'pufiae' => true,
  'pgnouf' => true,
  'pmbêch' => true,
  'psseux' => true,
  'pqunud' => true,
  'pnufle' => true,
  'pnoufl' => true,
  'panufl' => true,
  'panier' => true,
  'patarn' => true,
  'pecque' => true,
  'pedque' => true,
  'pedoqu' => true,
  'petsse' => true,
  'petass' => true,
  'peteux' => true,
  'pignuf' => true,
  'piment' => true,
  'piquer' => true,
  'pissux' => true,
  'pissou' => true,
  'plotte' => true,
  'pomper' => true,
  'porcss' => true,
  'porcae' => true,
  'porcas' => true,
  'poucav' => true,
  'poufss' => true,
  'poufae' => true,
  'pouffe' => true,
  'pouffa' => true,
  'pouffi' => true,
  'poufie' => true,
  'poufia' => true,
  'pounde' => true,
  'poundé' => true,
  'poupée' => true,
  'punise' => true,
  'punase' => true,
  'punaie' => true,
  'punais' => true,
  'pédque' => true,
  'pédale' => true,
  'pédoqu' => true,
  'pétsse' => true,
  'pétass' => true,
  'péteux' => true,
  'quutrd' => true,
  'rbprrt' => true,
  'rulure' => true,
  'rpopee' => true,
  'rpopée' => true,
  'rclure' => true,
  'raclur' => true,
  'rapace' => true,
  'rippee' => true,
  'rippée' => true,
  'ripope' => true,
  'ripopé' => true,
  'rosbif' => true,
  'roulur' => true,
  'sttsux' => true,
  'susmrd' => true,
  'sgouin' => true,
  'slopri' => true,
  'sloprd' => true,
  'strull' => true,
  'saguin' => true,
  'sagoun' => true,
  'salaud' => true,
  'sauter' => true,
  'schbeb' => true,
  'schleu' => true,
  'schnck' => true,
  'schnqu' => true,
  'schnek' => true,
  'schnoc' => true,
  'scivey' => true,
  'sodome' => true,
  'sperme' => true,
  'striqu' => true,
  'starqu' => true,
  'sterqu' => true,
  'stérqu' => true,
  'tfiole' => true,
  'tnturi' => true,
  'tntusr' => true,
  'tntuze' => true,
  'tntour' => true,
  'tntouz' => true,
  'tpette' => true,
  'trluze' => true,
  'trlouz' => true,
  'tafole' => true,
  'tafile' => true,
  'tafiol' => true,
  'tanche' => true,
  'tantur' => true,
  'tantuz' => true,
  'tarluz' => true,
  'tayeul' => true,
  'teteux' => true,
  'teucha' => true,
  'tocard' => true,
  'touffe' => true,
  'truduc' => true,
  'trinee' => true,
  'trînee' => true,
  'trînée' => true,
  'tranee' => true,
  'trappe' => true,
  'traîne' => true,
  'traîné' => true,
  'trique' => true,
  'trusse' => true,
  'truass' => true,
  'truiss' => true,
  'truiae' => true,
  'téteux' => true,
  'urètre' => true,
  'utérus' => true,
  'vdcull' => true,
  'vedase' => true,
  'védase' => true,
  'vurien' => true,
  'vauren' => true,
  'vaurin' => true,
  'verrat' => true,
  'viarge' => true,
  'viedse' => true,
  'viedae' => true,
  'viedas' => true,
  'viédse' => true,
  'viédae' => true,
  'viédas' => true,
  'xrpnur' => true,
  'yupntn' => true,
  'yupine' => true,
  'youpne' => true,
  'youpin' => true,
  'youtre' => true,
  'zboube' => true,
  'zguegu' => true,
  'zguègu' => true,
  'éburné' => true,
  'ériger' => true,
  'étoile' => true,
  'pingoin' => true,
  'mmanche' => true,
  'mmanché' => true,
  'mppoute' => true,
  'mppouté' => true,
  'mpapaut' => true,
  'nvlinur' => true,
  'nvslnur' => true,
  'nvalnur' => true,
  'spingin' => true,
  'truille' => true,
  'troulle' => true,
  'trouill' => true,
  'alopard' => true,
  'atrulle' => true,
  'atruill' => true,
  'atroull' => true,
  'chnoque' => true,
  'entlpie' => true,
  'entlape' => true,
  'ottieux' => true,
  'oumerde' => true,
  'terique' => true,
  'tearque' => true,
  'teariqu' => true,
  'térique' => true,
  'téarque' => true,
  'téariqu' => true,
  'nduille' => true,
  'ndoulle' => true,
  'ndouill' => true,
  'andulle' => true,
  'anduill' => true,
  'andoull' => true,
  'avorton' => true,
  'bugnulr' => true,
  'bugnule' => true,
  'bugnuli' => true,
  'burdlle' => true,
  'burdill' => true,
  'btembos' => true,
  'bagouse' => true,
  'baiseur' => true,
  'baptême' => true,
  'biffler' => true,
  'bitmbis' => true,
  'bitmboi' => true,
  'bitembi' => true,
  'biétaze' => true,
  'bloblos' => true,
  'bonasse' => true,
  'bouffon' => true,
  'bounoul' => true,
  'bourdll' => true,
  'bourrée' => true,
  'bouseux' => true,
  'boutons' => true,
  'brnleur' => true,
  'branlur' => true,
  'branler' => true,
  'branlée' => true,
  'branque' => true,
  'briburn' => true,
  'brouter' => true,
  'bâtarde' => true,
  'cnchier' => true,
  'cnnarde' => true,
  'cnnasse' => true,
  'cullnnr' => true,
  'cuilles' => true,
  'cunifle' => true,
  'curtaud' => true,
  'cbonbon' => true,
  'ccouill' => true,
  'ceculle' => true,
  'cldoche' => true,
  'cssbnbn' => true,
  'csscull' => true,
  'cacuill' => true,
  'cacoull' => true,
  'caebnbn' => true,
  'cagasse' => true,
  'cailler' => true,
  'caldche' => true,
  'caldoch' => true,
  'calisse' => true,
  'chnnass' => true,
  'chennae' => true,
  'chntoqu' => true,
  'chnetoc' => true,
  'chuffrd' => true,
  'chachar' => true,
  'chagass' => true,
  'chalice' => true,
  'chattes' => true,
  'chinnss' => true,
  'chiante' => true,
  'chiasse' => true,
  'chienne' => true,
  'chierie' => true,
  'chieurs' => true,
  'chieuse' => true,
  'chintqu' => true,
  'chintoc' => true,
  'chinetc' => true,
  'chintok' => true,
  'ciboire' => true,
  'cibolle' => true,
  'conasse' => true,
  'concher' => true,
  'conchir' => true,
  'connrde' => true,
  'connsse' => true,
  'connard' => true,
  'connass' => true,
  'conneau' => true,
  'coulles' => true,
  'coullon' => true,
  'couills' => true,
  'couillu' => true,
  'counfle' => true,
  'counifl' => true,
  'courtud' => true,
  'crullat' => true,
  'cruillt' => true,
  'cruille' => true,
  'crevard' => true,
  'crevure' => true,
  'crisser' => true,
  'crosser' => true,
  'croullt' => true,
  'croulle' => true,
  'crouill' => true,
  'croûton' => true,
  'culasse' => true,
  'culeter' => true,
  'culeurs' => true,
  'câlisse' => true,
  'dgulass' => true,
  'dilater' => true,
  'doigter' => true,
  'druille' => true,
  'drisser' => true,
  'droulle' => true,
  'drouill' => true,
  'duchnck' => true,
  'dugnoux' => true,
  'dugenux' => true,
  'dugland' => true,
  'déconne' => true,
  'déculer' => true,
  'dégager' => true,
  'epingin' => true,
  'emmnche' => true,
  'emmnché' => true,
  'emmerdé' => true,
  'emppute' => true,
  'empputé' => true,
  'enculée' => true,
  'enfiler' => true,
  'enfoiré' => true,
  'entuber' => true,
  'envoyer' => true,
  'espngon' => true,
  'espacer' => true,
  'fignass' => true,
  'faciale' => true,
  'foirade' => true,
  'fourbir' => true,
  'fourrer' => true,
  'fouteur' => true,
  'foutoir' => true,
  'framble' => true,
  'fétiche' => true,
  'gulland' => true,
  'guillnd' => true,
  'gurgndn' => true,
  'glndeue' => true,
  'glndeur' => true,
  'glandur' => true,
  'glandus' => true,
  'glisser' => true,
  'goullnd' => true,
  'gourdin' => true,
  'grgnsse' => true,
  'grgnass' => true,
  'grognss' => true,
  'grognae' => true,
  'gundule' => true,
  'gundoul' => true,
  'guenche' => true,
  'gueuler' => true,
  'guindul' => true,
  'imbecil' => true,
  'imbécil' => true,
  'inceste' => true,
  'jnfoutr' => true,
  'janfutr' => true,
  'lacheux' => true,
  'lavette' => true,
  'lopette' => true,
  'lyncher' => true,
  'lâcheux' => true,
  'mnsqurn' => true,
  'minille' => true,
  'minaill' => true,
  'mncille' => true,
  'mnacall' => true,
  'mricaud' => true,
  'merable' => true,
  'mérable' => true,
  'mserble' => true,
  'mserabl' => true,
  'msérble' => true,
  'msérabl' => true,
  'mrdllon' => true,
  'mrdilln' => true,
  'mrdalln' => true,
  'mrdaill' => true,
  'mrchndt' => true,
  'mrgullt' => true,
  'muvette' => true,
  'makoume' => true,
  'makoumé' => true,
  'mamelon' => true,
  'mangmrd' => true,
  'maudite' => true,
  'mauvitt' => true,
  'merdlln' => true,
  'merdlle' => true,
  'merdeux' => true,
  'merdier' => true,
  'metteux' => true,
  'mierble' => true,
  'mierabl' => true,
  'miérble' => true,
  'miérabl' => true,
  'minable' => true,
  'misrabl' => true,
  'miserbl' => true,
  'misérbl' => true,
  'monqurn' => true,
  'monalle' => true,
  'moinill' => true,
  'mollard' => true,
  'monclle' => true,
  'moncill' => true,
  'morcaud' => true,
  'moricud' => true,
  'mouille' => true,
  'mésange' => true,
  'niiseux' => true,
  'niaieux' => true,
  'niaisux' => true,
  'niakoue' => true,
  'niakoué' => true,
  'néonazi' => true,
  'orgasme' => true,
  'prcasse' => true,
  'pufasse' => true,
  'puffsse' => true,
  'puffass' => true,
  'puffiss' => true,
  'puffiae' => true,
  'pufisse' => true,
  'pufiass' => true,
  'purrtur' => true,
  'pmbêche' => true,
  'pqunaud' => true,
  'pnoufle' => true,
  'pachole' => true,
  'panufle' => true,
  'panoufl' => true,
  'patarin' => true,
  'paysbas' => true,
  'pedoque' => true,
  'pequnud' => true,
  'pervers' => true,
  'pignouf' => true,
  'pimbêch' => true,
  'piqûres' => true,
  'pisseur' => true,
  'pisseux' => true,
  'pleutre' => true,
  'pommeau' => true,
  'porcsse' => true,
  'porcass' => true,
  'poufsse' => true,
  'poufass' => true,
  'pouffss' => true,
  'pouffae' => true,
  'pouffie' => true,
  'pouffia' => true,
  'poufiss' => true,
  'poufiae' => true,
  'pougner' => true,
  'pourrir' => true,
  'poutrer' => true,
  'punaise' => true,
  'pédoque' => true,
  'péqunud' => true,
  'pétasse' => true,
  'quutard' => true,
  'queutrd' => true,
  'rbpirrt' => true,
  'rbsprrt' => true,
  'radasse' => true,
  'ramoner' => true,
  'riflard' => true,
  'ripopee' => true,
  'ripopée' => true,
  'roulure' => true,
  'sttseux' => true,
  'sttisux' => true,
  'sntlpss' => true,
  'strulle' => true,
  'struill' => true,
  'stroull' => true,
  'saccade' => true,
  'sadique' => true,
  'sadisme' => true,
  'sagouin' => true,
  'salpard' => true,
  'salopri' => true,
  'salopes' => true,
  'saloppe' => true,
  'satrull' => true,
  'schnque' => true,
  'schnock' => true,
  'schnoqu' => true,
  'simonac' => true,
  'sodomie' => true,
  'sottsux' => true,
  'sousmrd' => true,
  'squatch' => true,
  'stariqu' => true,
  'sterque' => true,
  'steriqu' => true,
  'stearqu' => true,
  'stupide' => true,
  'stérque' => true,
  'stériqu' => true,
  'stéarqu' => true,
  'suceuse' => true,
  'tntuere' => true,
  'tntusri' => true,
  'tntouri' => true,
  'tntousr' => true,
  'tntouze' => true,
  'trlouze' => true,
  'taboune' => true,
  'tafiole' => true,
  'taistoi' => true,
  'tanturi' => true,
  'tantusr' => true,
  'tantuze' => true,
  'tantour' => true,
  'tantouz' => true,
  'tapette' => true,
  'tapiole' => true,
  'tarluze' => true,
  'tarlouz' => true,
  'tassepé' => true,
  'torrieu' => true,
  'torvice' => true,
  'trainee' => true,
  'traînee' => true,
  'traînée' => true,
  'tremper' => true,
  'truasse' => true,
  'truisse' => true,
  'truiass' => true,
  'turlute' => true,
  'vdculls' => true,
  'vdcoull' => true,
  'varlope' => true,
  'vaurien' => true,
  'verasse' => true,
  'viedase' => true,
  'vieille' => true,
  'violeur' => true,
  'viédase' => true,
  'xrpinur' => true,
  'xropnur' => true,
  'xerpnur' => true,
  'xérpnur' => true,
  'yupnatn' => true,
  'yupnstn' => true,
  'youpine' => true,
  'zguegue' => true,
  'zguègue' => true,
  'égoïsme' => true,
  'éjacule' => true,
  'éjaculé' => true,
  'mpapaute' => true,
  'mpapauté' => true,
  'mpapaout' => true,
  'nvslinur' => true,
  'nvalinur' => true,
  'nvaslnur' => true,
  'spingoin' => true,
  'trouille' => true,
  'atruille' => true,
  'atroulle' => true,
  'atrouill' => true,
  'entlapie' => true,
  'tearique' => true,
  'téarique' => true,
  'ndouille' => true,
  'anduille' => true,
  'andoulle' => true,
  'andouill' => true,
  'arracher' => true,
  'astiquer' => true,
  'avorteur' => true,
  'bugnultn' => true,
  'bugnuler' => true,
  'bugnulsr' => true,
  'bugnulir' => true,
  'bugnulie' => true,
  'burdille' => true,
  'baisable' => true,
  'baiseurs' => true,
  'barabbas' => true,
  'bitmbois' => true,
  'bitembis' => true,
  'bitemboi' => true,
  'bolosser' => true,
  'bondance' => true,
  'bonnasse' => true,
  'boucaque' => true,
  'bougnoul' => true,
  'bounioul' => true,
  'bourdlle' => true,
  'bourdill' => true,
  'breburne' => true,
  'brsburns' => true,
  'branlage' => true,
  'branleur' => true,
  'broutage' => true,
  'brouteur' => true,
  'cuillnnr' => true,
  'cebonbon' => true,
  'cecuille' => true,
  'cecoulle' => true,
  'cssculls' => true,
  'csscuill' => true,
  'csscoull' => true,
  'cssebnbn' => true,
  'cabonbon' => true,
  'cacouill' => true,
  'caeculle' => true,
  'cagoince' => true,
  'caldoche' => true,
  'calvaire' => true,
  'calvâsse' => true,
  'cassbnbn' => true,
  'casscull' => true,
  'cassetoi' => true,
  'chennsse' => true,
  'chnetque' => true,
  'chagasse' => true,
  'chagatte' => true,
  'chatbite' => true,
  'chinnass' => true,
  'chiasser' => true,
  'chiennae' => true,
  'chiennes' => true,
  'chintoqu' => true,
  'chinetoc' => true,
  'chiottes' => true,
  'chiseler' => true,
  'christer' => true,
  'cinclème' => true,
  'clochard' => true,
  'conchier' => true,
  'connarde' => true,
  'connards' => true,
  'connasse' => true,
  'couilles' => true,
  'couillon' => true,
  'counifle' => true,
  'courtaud' => true,
  'cruillat' => true,
  'crosseur' => true,
  'croullat' => true,
  'crouillt' => true,
  'crouille' => true,
  'crucifix' => true,
  'culbuter' => true,
  'câlisser' => true,
  'decaliss' => true,
  'demerder' => true,
  'diarrhée' => true,
  'drouille' => true,
  'duchnock' => true,
  'duconnot' => true,
  'dugenoux' => true,
  'duschnck' => true,
  'débander' => true,
  'déboiter' => true,
  'déconner' => true,
  'défoncer' => true,
  'dégénéré' => true,
  'démerder' => true,
  'démonter' => true,
  'epingoin' => true,
  'emmanche' => true,
  'emmanché' => true,
  'emmerder' => true,
  'emppoute' => true,
  'emppouté' => true,
  'enconner' => true,
  'enculade' => true,
  'enculage' => true,
  'enculeur' => true,
  'enfoirer' => true,
  'enfoirée' => true,
  'envulver' => true,
  'espingin' => true,
  'exploser' => true,
  'fegnasse' => true,
  'feignsse' => true,
  'foufoune' => true,
  'frambler' => true,
  'guilland' => true,
  'gurgndne' => true,
  'gurgndin' => true,
  'gurgandn' => true,
  'glndullu' => true,
  'glndeuse' => true,
  'glandeue' => true,
  'glandeur' => true,
  'goulland' => true,
  'gougnote' => true,
  'gouillnd' => true,
  'gourgndn' => true,
  'grgnasse' => true,
  'grognsse' => true,
  'grognass' => true,
  'grouille' => true,
  'gundoule' => true,
  'gueniche' => true,
  'guindule' => true,
  'guindoul' => true,
  'imbecile' => true,
  'imbécile' => true,
  'janfoutr' => true,
  'jenfutre' => true,
  'lynchage' => true,
  'lèchecul' => true,
  'mnqueren' => true,
  'minqurin' => true,
  'minaille' => true,
  'mnacalle' => true,
  'mnacaill' => true,
  'mserable' => true,
  'msérable' => true,
  'mrdullrd' => true,
  'mrdillon' => true,
  'mrdallon' => true,
  'mrdailln' => true,
  'mrchndot' => true,
  'mrgullte' => true,
  'mrgullst' => true,
  'mrgoullt' => true,
  'muviette' => true,
  'margullt' => true,
  'maususse' => true,
  'mautadit' => true,
  'mauvette' => true,
  'merdllon' => true,
  'merdilln' => true,
  'merdille' => true,
  'merdalln' => true,
  'merdalle' => true,
  'merdasse' => true,
  'merderie' => true,
  'merdeuse' => true,
  'merdique' => true,
  'mierable' => true,
  'miérable' => true,
  'miserble' => true,
  'miserabl' => true,
  'misérble' => true,
  'misérabl' => true,
  'monsqurn' => true,
  'moinille' => true,
  'moinaill' => true,
  'moncille' => true,
  'monacall' => true,
  'moricaud' => true,
  'niaiseux' => true,
  'orgasmes' => true,
  'puffasse' => true,
  'puffisse' => true,
  'puffiass' => true,
  'pufiasse' => true,
  'purrture' => true,
  'purritur' => true,
  'palucher' => true,
  'panoufle' => true,
  'parechoc' => true,
  'penchant' => true,
  'pequnaud' => true,
  'pequenud' => true,
  'pimbêche' => true,
  'pognecul' => true,
  'porcasse' => true,
  'poufasse' => true,
  'pouffsse' => true,
  'pouffass' => true,
  'pouffiss' => true,
  'pouffiae' => true,
  'poufisse' => true,
  'poufiass' => true,
  'pourrtur' => true,
  'pénétrer' => true,
  'péqunaud' => true,
  'péquenud' => true,
  'queutard' => true,
  'rbspirrt' => true,
  'rbeperrt' => true,
  'refucker' => true,
  'robprrot' => true,
  'rondelle' => true,
  'roupette' => true,
  'sttiseux' => true,
  'susmerde' => true,
  'sntlpiss' => true,
  'sntlapss' => true,
  'sloperie' => true,
  'struille' => true,
  'stroulle' => true,
  'strouill' => true,
  'salperie' => true,
  'salament' => true,
  'salopard' => true,
  'salopere' => true,
  'sanglant' => true,
  'satrulle' => true,
  'satruill' => true,
  'satroull' => true,
  'schnoque' => true,
  'sodomisé' => true,
  'sottseux' => true,
  'sottisux' => true,
  'souchien' => true,
  'sterique' => true,
  'stearque' => true,
  'steariqu' => true,
  'stérique' => true,
  'stéarque' => true,
  'stéariqu' => true,
  'tntuerie' => true,
  'tntusere' => true,
  'tntouere' => true,
  'tntousri' => true,
  'tabarnac' => true,
  'tabarnak' => true,
  'tabernac' => true,
  'tantuere' => true,
  'tantusri' => true,
  'tantouri' => true,
  'tantousr' => true,
  'tantouze' => true,
  'tarlouze' => true,
  'tirelire' => true,
  'torrieux' => true,
  'tringler' => true,
  'troncher' => true,
  'truiasse' => true,
  'turlutte' => true,
  'urinaire' => true,
  'vdcoulls' => true,
  'vdeculle' => true,
  'valseuse' => true,
  'vidcuill' => true,
  'xropinur' => true,
  'xerpneur' => true,
  'xerpinur' => true,
  'xeropnur' => true,
  'xérpneur' => true,
  'xérpinur' => true,
  'xéropnur' => true,
  'yupnsatn' => true,
  'youpnton' => true,
  'écouillé' => true,
  'éjaculer' => true,
  'érection' => true,
  'mpapaoute' => true,
  'mpapaouté' => true,
  'nvaslinur' => true,
  'atrouille' => true,
  'andouille' => true,
  'angishore' => true,
  'bugnulatn' => true,
  'bugnulstn' => true,
  'bugnulser' => true,
  'bugnulier' => true,
  'bugnulisr' => true,
  'balayette' => true,
  'berlingue' => true,
  'bitembois' => true,
  'bosnioule' => true,
  'bouffable' => true,
  'bougnoulr' => true,
  'bougnoule' => true,
  'bougnouli' => true,
  'bounioule' => true,
  'bourdille' => true,
  'brackmard' => true,
  'branlette' => true,
  'branleuse' => true,
  'brieburne' => true,
  'brisburns' => true,
  'brouteuse' => true,
  'cuillnner' => true,
  'cecouille' => true,
  'cssbonbon' => true,
  'csscuills' => true,
  'csscoulls' => true,
  'csscouill' => true,
  'csseculle' => true,
  'caebonbon' => true,
  'caecuille' => true,
  'caecoulle' => true,
  'cassculls' => true,
  'casscuill' => true,
  'casscoull' => true,
  'cassebnbn' => true,
  'chennasse' => true,
  'chnetoque' => true,
  'charmouta' => true,
  'chauffard' => true,
  'chiatique' => true,
  'chiennsse' => true,
  'chinetque' => true,
  'cibouã¨re' => true,
  'conneries' => true,
  'courageux' => true,
  'crouillat' => true,
  'cruchasse' => true,
  'câliboire' => true,
  'demimolle' => true,
  'duschnock' => true,
  'décharger' => true,
  'déconnade' => true,
  'déconnage' => true,
  'décrisser' => true,
  'défonceur' => true,
  'déguelsse' => true,
  'dépuceler' => true,
  'emmancher' => true,
  'emmerdant' => true,
  'emmerdeue' => true,
  'emmerdeur' => true,
  'empapaute' => true,
  'empapauté' => true,
  'enconnade' => true,
  'encuguler' => true,
  'enculable' => true,
  'enculerie' => true,
  'enculette' => true,
  'enculeurs' => true,
  'enculeuse' => true,
  'enfoutrer' => true,
  'englander' => true,
  'engrosser' => true,
  'engueuler' => true,
  'envelneur' => true,
  'espingoin' => true,
  'feignasse' => true,
  'fellation' => true,
  'gurgndine' => true,
  'gurgandne' => true,
  'gurgandin' => true,
  'glnduillu' => true,
  'glandullu' => true,
  'glandeuse' => true,
  'godemiché' => true,
  'gougnoter' => true,
  'gouilland' => true,
  'gourgndne' => true,
  'gourgndin' => true,
  'gourgandn' => true,
  'grognasse' => true,
  'guindoule' => true,
  'hébéphile' => true,
  'imbitable' => true,
  'jenfoutre' => true,
  'jeanfutre' => true,
  'joualvert' => true,
  'jériboire' => true,
  'lesbienne' => true,
  'mnsqueren' => true,
  'minsqurin' => true,
  'mnacaille' => true,
  'mrdullard' => true,
  'mrduillrd' => true,
  'mrdaillon' => true,
  'mrdoullrd' => true,
  'mngemerde' => true,
  'mrgullste' => true,
  'mrguillit' => true,
  'mrgoullte' => true,
  'mrgoullst' => true,
  'marchandt' => true,
  'margullte' => true,
  'margullst' => true,
  'margoullt' => true,
  'masturber' => true,
  'mautadine' => true,
  'mauviette' => true,
  'merdullrd' => true,
  'merdillon' => true,
  'merdallon' => true,
  'merdailln' => true,
  'merdaille' => true,
  'merdicité' => true,
  'merdogène' => true,
  'miserable' => true,
  'misérable' => true,
  'monqueren' => true,
  'moinqurin' => true,
  'moinaille' => true,
  'monacalle' => true,
  'monacaill' => true,
  'moulebite' => true,
  'niaiseuse' => true,
  'ostensoir' => true,
  'puffiasse' => true,
  'purriture' => true,
  'pansexuel' => true,
  'papiercul' => true,
  'parechocs' => true,
  'pequenaud' => true,
  'pouffasse' => true,
  'pouffisse' => true,
  'pouffiass' => true,
  'poufiasse' => true,
  'pourrture' => true,
  'pourritur' => true,
  'pédophile' => true,
  'péquenaud' => true,
  'quéquette' => true,
  'rbepierrt' => true,
  'rbesperrt' => true,
  'robpirrot' => true,
  'robsprrot' => true,
  'réenculer' => true,
  'sntlapiss' => true,
  'strouille' => true,
  'sacrament' => true,
  'sacrebleu' => true,
  'saintosti' => true,
  'saloperie' => true,
  'saprement' => true,
  'satruille' => true,
  'satroulle' => true,
  'satrouill' => true,
  'sentlpsse' => true,
  'shampoing' => true,
  'simonaque' => true,
  'sodomiser' => true,
  'sottiseux' => true,
  'sousmerde' => true,
  'sphincter' => true,
  'stearique' => true,
  'stéarique' => true,
  'tntuserie' => true,
  'tntouerie' => true,
  'tntousere' => true,
  'tantuerie' => true,
  'tantusere' => true,
  'tantouere' => true,
  'tantousri' => true,
  'testicule' => true,
  'tireaucul' => true,
  'turluchon' => true,
  'vdeculles' => true,
  'vdecoulle' => true,
  'vidcuills' => true,
  'vidcouill' => true,
  'wasteyute' => true,
  'xerpineur' => true,
  'xeropneur' => true,
  'xeropinur' => true,
  'xérpineur' => true,
  'xéropneur' => true,
  'xéropinur' => true,
  'yupinitin' => true,
  'youpnaton' => true,
  'youpnston' => true,
  'zoophilie' => true,
  'éjaculant' => true,
  'abortuaire' => true,
  'ambisexuel' => true,
  'ambosexuel' => true,
  'avortement' => true,
  'bugnulsatn' => true,
  'bugnulitin' => true,
  'bugnuliser' => true,
  'bestialité' => true,
  'bigornette' => true,
  'bougnouler' => true,
  'bougnoulsr' => true,
  'bougnoulir' => true,
  'bougnoulie' => true,
  'bourriquer' => true,
  'brseburnes' => true,
  'branlotter' => true,
  'csscouills' => true,
  'cssebonbon' => true,
  'csseculles' => true,
  'cssecuille' => true,
  'cssecoulle' => true,
  'caecouille' => true,
  'cassbonbon' => true,
  'casscuills' => true,
  'casscoulls' => true,
  'casscouill' => true,
  'casseculle' => true,
  'chiennasse' => true,
  'chiennerie' => true,
  'chinetoque' => true,
  'convoitise' => true,
  'coquillard' => true,
  'coullonner' => true,
  'couillonnr' => true,
  'couillonne' => true,
  'cramouille' => true,
  'crissement' => true,
  'deguelasse' => true,
  'débagouler' => true,
  'décâlisser' => true,
  'déglinguer' => true,
  'déguelasse' => true,
  'dépucelage' => true,
  'emmerdeuse' => true,
  'empapaoute' => true,
  'empapaouté' => true,
  'enculement' => true,
  'envelineur' => true,
  'envselneur' => true,
  'envaelneur' => true,
  'fartmonger' => true,
  'fartmuppet' => true,
  'foutriquer' => true,
  'gurgandine' => true,
  'glndoullou' => true,
  'glanduillu' => true,
  'gourgndine' => true,
  'gourgandne' => true,
  'gourgandin' => true,
  'grogniasse' => true,
  'hirondelle' => true,
  'hébéphiles' => true,
  'hébéphilie' => true,
  'imbaisable' => true,
  'incestueux' => true,
  'jeanfoutre' => true,
  'journalope' => true,
  'minquerien' => true,
  'mrduillard' => true,
  'mrdoullard' => true,
  'mrdouillrd' => true,
  'mrguillite' => true,
  'mrguillist' => true,
  'mrgoullste' => true,
  'mrgouillit' => true,
  'mangemerde' => true,
  'marchandot' => true,
  'margullste' => true,
  'marguillit' => true,
  'margoullte' => true,
  'margoullst' => true,
  'masochiste' => true,
  'merdullard' => true,
  'merduillrd' => true,
  'merdaillon' => true,
  'merdoullrd' => true,
  'monsqueren' => true,
  'moinsqurin' => true,
  'monacaille' => true,
  'motoculter' => true,
  'pisseaulit' => true,
  'pouffiasse' => true,
  'pourriture' => true,
  'prostituée' => true,
  'pédophilie' => true,
  'rbespierrt' => true,
  'raslamoule' => true,
  'robspirrot' => true,
  'robeperrot' => true,
  'roubignole' => true,
  'réempaffer' => true,
  'sacréfisse' => true,
  'saintcrême' => true,
  'satrouille' => true,
  'sauteaupaf' => true,
  'sentlpisse' => true,
  'sentlapsse' => true,
  'souchienne' => true,
  'suceboules' => true,
  'tntouserie' => true,
  'tabernacle' => true,
  'tantuserie' => true,
  'tantouerie' => true,
  'tantousere' => true,
  'tartissure' => true,
  'trouducune' => true,
  'troufignon' => true,
  'vdecoulles' => true,
  'vidcouills' => true,
  'videcuille' => true,
  'xeropineur' => true,
  'xéropineur' => true,
  'yupiniatin' => true,
  'yupinistin' => true,
  'youpnsaton' => true,
  'zigounette' => true,
  'archifoutre' => true,
  'asphalteuse' => true,
  'avortements' => true,
  'bugnuliatin' => true,
  'bugnulistin' => true,
  'bougnoulton' => true,
  'bougnoulser' => true,
  'bougnoulier' => true,
  'bougnoulisr' => true,
  'briseburnes' => true,
  'brouteminou' => true,
  'cssecuilles' => true,
  'cssecoulles' => true,
  'cssecouille' => true,
  'casscouills' => true,
  'cassebonbon' => true,
  'casseculles' => true,
  'cassecuille' => true,
  'cassecoulle' => true,
  'chaudepisse' => true,
  'claquemerde' => true,
  'couillonner' => true,
  'dégueulasse' => true,
  'désengorger' => true,
  'enculatoire' => true,
  'envselineur' => true,
  'envaelineur' => true,
  'envaselneur' => true,
  'eucharistie' => true,
  'foufounette' => true,
  'glndouillou' => true,
  'glandoullou' => true,
  'gourgandine' => true,
  'minsquerien' => true,
  'mrdouillard' => true,
  'mrguilliste' => true,
  'mrgouillite' => true,
  'mrgouillist' => true,
  'marguillite' => true,
  'marguillist' => true,
  'margoullste' => true,
  'margouillit' => true,
  'merduillard' => true,
  'merdoullard' => true,
  'merdouillrd' => true,
  'moinquerien' => true,
  'nymphomanie' => true,
  'pénétration' => true,
  'raslebonbon' => true,
  'robepierrot' => true,
  'robesperrot' => true,
  'saintchrême' => true,
  'sentlapisse' => true,
  'tantouserie' => true,
  'tapettitude' => true,
  'videcuilles' => true,
  'videcouille' => true,
  'yupinisatin' => true,
  'youpinition' => true,
  'éjaculation' => true,
  'bugnulisatin' => true,
  'bougnoulaton' => true,
  'bougnoulston' => true,
  'bougnouliser' => true,
  'broutteminou' => true,
  'cssecouilles' => true,
  'casseburette' => true,
  'cassecuilles' => true,
  'cassecoulles' => true,
  'cassecouille' => true,
  'cherchemerde' => true,
  'cochonneries' => true,
  'défourailler' => true,
  'empapaoutage' => true,
  'enculailleur' => true,
  'enfourailler' => true,
  'envaselineur' => true,
  'fouillemerde' => true,
  'glandouillou' => true,
  'imbitabilité' => true,
  'mrgouilliste' => true,
  'maquerellage' => true,
  'marguilliste' => true,
  'margouillite' => true,
  'margouillist' => true,
  'merdouillard' => true,
  'moinsquerien' => true,
  'motocultable' => true,
  'pinocumettre' => true,
  'pornographie' => true,
  'poussecrotte' => true,
  'raslesfesses' => true,
  'robespierrot' => true,
  'saintciboire' => true,
  'sanscouilles' => true,
  'sarchifoutre' => true,
  'testiculaire' => true,
  'troufignoler' => true,
  'videcouilles' => true,
  'youpiniation' => true,
  'youpinistion' => true,
  'éjaculations' => true,
  'bougnoulsaton' => true,
  'bougnoulition' => true,
  'branlecouille' => true,
  'cassecouilles' => true,
  'contrecrisser' => true,
  'enculagailler' => true,
  'filsdeputerie' => true,
  'margouilliste' => true,
  'sucemédailles' => true,
  'youpinisation' => true,
  'acrotomophilie' => true,
  'bougnouliation' => true,
  'bougnoulistion' => true,
  'lambisexualité' => true,
  'pinocumettable' => true,
  'pisserclitoris' => true,
  'saintsacrament' => true,
  'saintsimonaque' => true,
  'troufignolerie' => true,
  'troufignoliser' => true,
  'bougnoulisation' => true,
  'dégueulassement' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'acré',
      1 => 'gué',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'acré' => 1,
      'gué' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bachie',
      1 => 'coupe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bachie' => 1,
      'coupe' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bombe',
      1 => 'atomique',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bombe' => 1,
      'atomique' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bon',
      1 => 'ariens',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bon' => 1,
      'ariens' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bon',
      1 => 'coup',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bon' => 1,
      'coup' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bon',
      1 => 'sang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bon' => 1,
      'sang' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boyau',
      1 => 'cullier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'boyau' => 1,
      'cullier' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cest',
      1 => 'plate',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cest' => 1,
      'plate' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'casse',
      1 => 'toi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'casse' => 1,
      'toi' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cervelle',
      1 => 'doiseau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cervelle' => 1,
      'doiseau' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'claque',
      1 => 'merde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'claque' => 1,
      'merde' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'couille',
      1 => 'molle',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'couille' => 1,
      'molle' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'des',
      1 => 'balles',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'des' => 1,
      'balles' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'démerde',
      1 => 'yourself',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'démerde' => 1,
      'yourself' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'en',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'en' => 1,
      'chier' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fais',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fais',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'goo',
      1 => 'guzzler',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'goo' => 1,
      'guzzler' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gross',
      1 => 'cul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gross' => 1,
      'cul' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grosse',
      1 => 'dose',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'grosse' => 1,
      'dose' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'memmerde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'je' => 1,
      'memmerde' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'temmerde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'je' => 1,
      'temmerde' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'tencule',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'je' => 1,
      'tencule' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'joual',
      1 => 'vert',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'joual' => 1,
      'vert' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'laissemoi',
      1 => 'tranquille',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'laissemoi' => 1,
      'tranquille' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'les',
      1 => 'lèvres',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'les' => 1,
      'lèvres' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'libérer',
      1 => 'mandela',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'libérer' => 1,
      'mandela' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'couille',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ma' => 1,
      'couille' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mange',
      1 => 'moi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mange' => 1,
      'moi' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mangeux',
      1 => 'dmarde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mangeux' => 1,
      'dmarde' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'merde',
      1 => 'embulante',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'merde' => 1,
      'embulante' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mon',
      1 => 'cul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mon' => 1,
      'cul' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mon',
      1 => 'dieu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mon' => 1,
      'dieu' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mon',
      1 => 'païen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mon' => 1,
      'païen' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oh',
      1 => 'merde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oh' => 1,
      'merde' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'on',
      1 => 'sencule',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'on' => 1,
      'sencule' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisser',
      1 => 'dans',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pisser' => 1,
      'dans' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'plan',
      1 => 'cul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'plan' => 1,
      'cul' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'putain' => 1,
      'de' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'quon',
      1 => 'lencule',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'quon' => 1,
      'lencule' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'retourne',
      1 => 'enculer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'retourne' => 1,
      'enculer' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'mère',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sa' => 1,
      'mère' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'race',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sa' => 1,
      'race' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'merde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sac' => 1,
      'merde' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'vin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sac' => 1,
      'vin' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sacre',
      1 => 'bleu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sacre' => 1,
      'bleu' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'cogner',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'se' => 1,
      'cogner' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'contrefoutre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'se' => 1,
      'contrefoutre' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'taire',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'se' => 1,
      'taire' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'stephen',
      1 => 'harper',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'stephen' => 1,
      'harper' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suceu',
      1 => 'dpoche',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suceu' => 1,
      'dpoche' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sen',
      1 => 'battre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sen' => 1,
      'battre' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sen',
      1 => 'cogner',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sen' => 1,
      'cogner' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sen',
      1 => 'foutre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sen' => 1,
      'foutre' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'bouche',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ta' => 1,
      'bouche' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'mere',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ta' => 1,
      'mere' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'mère',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ta' => 1,
      'mère' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tapis',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tapis' => 1,
      'muncher' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tarlouse',
      1 => 'va',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tarlouse' => 1,
      'va' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'memmerdes',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tu' => 1,
      'memmerdes' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'm`emmerdes',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tu' => 1,
      'm`emmerdes' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'une',
      1 => 'salope',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'une' => 1,
      'salope' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'va',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'va' => 1,
      'chier' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vas',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vas' => 1,
      'chier' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'viens',
      1 => 'menculer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'viens' => 1,
      'menculer' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vous',
      1 => 'vissez',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vous' => 1,
      'vissez' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'évalué',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'évalué' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'you',
      1 => 'hoser',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'you' => 1,
      'hoser' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'à',
      1 => 'chier',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'à' => 1,
      'chier' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'craint',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ça' => 1,
      'craint' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'memmerde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ça' => 1,
      'memmerde' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'pue',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ça' => 1,
      'pue' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'schlingue',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ça' => 1,
      'schlingue' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aller',
      1 => 'aux',
      2 => 'putes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aller' => 2,
      'aux' => 1,
      'putes' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aller',
      1 => 'libérer',
      2 => 'mandela',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aller' => 2,
      'libérer' => 1,
      'mandela' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allez',
      1 => 'va',
      2 => 'ten',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'allez' => 2,
      'va' => 1,
      'ten' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avoir',
      1 => 'du',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'avoir' => 2,
      'du' => 1,
      'cul' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avoir',
      1 => 'les',
      2 => 'nerfs',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'avoir' => 2,
      'les' => 1,
      'nerfs' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'balancer',
      1 => 'la',
      2 => 'sauce',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'balancer' => 2,
      'la' => 1,
      'sauce' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bar',
      1 => 'à',
      2 => 'putes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bar' => 2,
      'à' => 1,
      'putes' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'briser',
      1 => 'les',
      2 => 'noix',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'briser' => 2,
      'les' => 1,
      'noix' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'brûle',
      1 => 'en',
      2 => 'lenfer',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'brûle' => 2,
      'en' => 1,
      'lenfer' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ca',
      1 => 'fait',
      2 => 'chier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ca' => 2,
      'fait' => 1,
      'chier' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'carrer',
      1 => 'dans',
      2 => 'loignon',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'carrer' => 2,
      'dans' => 1,
      'loignon' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'carte',
      1 => 'de',
      2 => 'france',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'carte' => 2,
      'de' => 1,
      'france' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'casser',
      1 => 'les',
      2 => 'boules',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'casser' => 2,
      'les' => 1,
      'boules' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'casser',
      1 => 'les',
      2 => 'burnes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'casser' => 2,
      'les' => 1,
      'burnes' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ce',
      1 => 'putain',
      2 => 'dembouteillage',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ce' => 2,
      'putain' => 1,
      'dembouteillage' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ce',
      1 => 'putain',
      2 => 'dordinateur',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ce' => 2,
      'putain' => 1,
      'dordinateur' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cela',
      1 => 'me',
      2 => 'soûle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cela' => 2,
      'me' => 1,
      'soûle' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cervelle',
      1 => 'de',
      2 => 'moineau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cervelle' => 2,
      'de' => 1,
      'moineau' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chte',
      1 => 'harra',
      2 => 'lchu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chte' => 2,
      'harra' => 1,
      'lchu' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chacun',
      1 => 'sa',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chacun' => 2,
      'sa' => 1,
      'merde' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chier',
      1 => 'une',
      2 => 'pendule',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chier' => 2,
      'une' => 1,
      'pendule' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'choleque',
      1 => 'de',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'choleque' => 2,
      'de' => 1,
      'merde' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chrisse',
      1 => 'qui',
      2 => 'pisse',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chrisse' => 2,
      'qui' => 1,
      'pisse' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'couille',
      1 => 'de',
      2 => 'loup',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'couille' => 2,
      'de' => 1,
      'loup' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'coûter',
      1 => 'une',
      2 => 'couille',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'coûter' => 2,
      'une' => 1,
      'couille' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'craquer',
      1 => 'son',
      2 => 'slip',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'craquer' => 2,
      'son' => 1,
      'slip' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'craquer',
      1 => 'son',
      2 => 'string',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'craquer' => 2,
      'son' => 1,
      'string' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'crock',
      1 => 'la',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'crock' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dans',
      1 => 'ton',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dans' => 2,
      'ton' => 1,
      'cul' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'mes',
      2 => 'deux',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'de' => 2,
      'mes' => 1,
      'deux' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'débroussailler',
      1 => 'la',
      2 => 'tranchée',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'débroussailler' => 2,
      'la' => 1,
      'tranchée' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dérouler',
      1 => 'du',
      2 => 'câble',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dérouler' => 2,
      'du' => 1,
      'câble' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'emballeur',
      1 => 'de',
      2 => 'fudge',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'emballeur' => 2,
      'de' => 1,
      'fudge' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'en',
      1 => 'avoir',
      2 => 'deux',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'en' => 2,
      'avoir' => 1,
      'deux' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enculer',
      1 => 'les',
      2 => 'mouches',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'enculer' => 2,
      'les' => 1,
      'mouches' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enculer',
      1 => 'une',
      2 => 'mouche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'enculer' => 2,
      'une' => 1,
      'mouche' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enfant',
      1 => 'de',
      2 => 'putain',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'enfant' => 2,
      'de' => 1,
      'putain' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'et',
      1 => 'ta',
      2 => 'connerie',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'et' => 2,
      'ta' => 1,
      'connerie' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'face',
      1 => 'de',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'face' => 2,
      'de' => 1,
      'cul' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'face',
      1 => 'de',
      2 => 'tchu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'face' => 2,
      'de' => 1,
      'tchu' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fan',
      1 => 'de',
      2 => 'putain',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fan' => 2,
      'de' => 1,
      'putain' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fille',
      1 => 'à',
      2 => 'pédés',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fille' => 2,
      'à' => 1,
      'pédés' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'film',
      1 => 'de',
      2 => 'boules',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'film' => 2,
      'de' => 1,
      'boules' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'film',
      1 => 'de',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'film' => 2,
      'de' => 1,
      'cul' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fils',
      1 => 'de',
      2 => 'chien',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fils' => 2,
      'de' => 1,
      'chien' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fils',
      1 => 'de',
      2 => 'putain',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fils' => 2,
      'de' => 1,
      'putain' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fils',
      1 => 'de',
      2 => 'salope',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fils' => 2,
      'de' => 1,
      'salope' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foutre',
      1 => 'en',
      2 => 'lair',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'foutre' => 2,
      'en' => 1,
      'lair' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foutre',
      1 => 'la',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'foutre' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foutre',
      1 => 'la',
      2 => 'paix',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'foutre' => 2,
      'la' => 1,
      'paix' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fripe',
      1 => 'moi',
      2 => 'lchu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fripe' => 2,
      'moi' => 1,
      'lchu' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'frippe',
      1 => 'mes',
      2 => 'balles',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'frippe' => 2,
      'mes' => 1,
      'balles' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuck',
      1 => 'me',
      2 => 'boots',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fuck' => 2,
      'me' => 1,
      'boots' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'garage',
      1 => 'à',
      2 => 'bites',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'garage' => 2,
      'à' => 1,
      'bites' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'marre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jen' => 2,
      'ai' => 1,
      'marre' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jfoure',
      1 => 'ta',
      2 => 'mere',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jfoure' => 2,
      'ta' => 1,
      'mere' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fiche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fiche' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fou',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fou' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fous',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fous' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'sacre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'sacre' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'me',
      2 => 'gode',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'me' => 1,
      'gode' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fiche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fiche' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fou',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fou' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'men',
      2 => 'fous',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'men' => 1,
      'fous' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'te',
      2 => 'déteste',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'te' => 1,
      'déteste' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'veux',
      2 => 'tenculer',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'veux' => 1,
      'tenculer' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'viole',
      2 => 'tu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'je' => 2,
      'viole' => 1,
      'tu' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jésus',
      1 => 'de',
      2 => 'plâtre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jésus' => 2,
      'de' => 1,
      'plâtre' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'marre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jen' => 2,
      'ai' => 1,
      'marre' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lachemoi',
      1 => 'la',
      2 => 'grappe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lachemoi' => 2,
      'la' => 1,
      'grappe' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mange',
      1 => 'la',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mange' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'manger',
      1 => 'ma',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'manger' => 2,
      'ma' => 1,
      'merde' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'manges',
      1 => 'la',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'manges' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'morceau',
      1 => 'de',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'morceau' => 2,
      'de' => 1,
      'merde' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mouche',
      1 => 'à',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mouche' => 2,
      'à' => 1,
      'merde' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'rien',
      2 => 'foutre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ne' => 2,
      'rien' => 1,
      'foutre' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'la',
      2 => 'police',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'la' => 1,
      'police' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'sa',
      2 => 'mère',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'sa' => 1,
      'mère' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'ta',
      2 => 'mere',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'ta' => 1,
      'mere' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'ta',
      2 => 'mã¨re',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'ta' => 1,
      'mã¨re' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'ta',
      2 => 'mère',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'ta' => 1,
      'mère' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'ta',
      2 => 'race',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nique' => 2,
      'ta' => 1,
      'race' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nom',
      1 => 'de',
      2 => 'dieu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nom' => 2,
      'de' => 1,
      'dieu' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nul',
      1 => 'à',
      2 => 'chier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nul' => 2,
      'à' => 1,
      'chier' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oui',
      1 => 'ou',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oui' => 2,
      'ou' => 1,
      'merde' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'parachuter',
      1 => 'un',
      2 => 'sénégalais',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'parachuter' => 2,
      'un' => 1,
      'sénégalais' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'partir',
      1 => 'en',
      2 => 'couille',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'partir' => 2,
      'en' => 1,
      'couille' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'peau',
      1 => 'de',
      2 => 'zob',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'peau' => 2,
      'de' => 1,
      'zob' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pelle',
      1 => 'à',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pelle' => 2,
      'à' => 1,
      'merde' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisser',
      1 => 'sa',
      2 => 'côtelette',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pisser' => 2,
      'sa' => 1,
      'côtelette' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pomme',
      1 => 'à',
      2 => 'lhuile',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pomme' => 2,
      'à' => 1,
      'lhuile' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pompe',
      1 => 'à',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pompe' => 2,
      'à' => 1,
      'merde' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pousser',
      1 => 'une',
      2 => 'gueulante',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pousser' => 2,
      'une' => 1,
      'gueulante' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putain' => 2,
      'de' => 1,
      'merde' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'moine',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putain' => 2,
      'de' => 1,
      'moine' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'temps',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putain' => 2,
      'de' => 1,
      'temps' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'tes',
      2 => 'moche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putain' => 2,
      'tes' => 1,
      'moche' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'tes',
      2 => 'moche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putain' => 2,
      'tes' => 1,
      'moche' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'remuer',
      1 => 'la',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'remuer' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'retourne',
      1 => 'aux',
      2 => 'asperges',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'retourne' => 2,
      'aux' => 1,
      'asperges' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rien',
      1 => 'à',
      2 => 'enculer',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rien' => 2,
      'à' => 1,
      'enculer' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rien',
      1 => 'à',
      2 => 'foutre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rien' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'récurer',
      1 => 'la',
      2 => 'marmite',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'récurer' => 2,
      'la' => 1,
      'marmite' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'a',
      2 => 'foutre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'a' => 1,
      'foutre' => 0,
    ),
  ),
  177 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'de',
      2 => 'billes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'de' => 1,
      'billes' => 0,
    ),
  ),
  178 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'à',
      2 => 'foutre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  179 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'à',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'à' => 1,
      'merde' => 0,
    ),
  ),
  180 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'ã',
      2 => 'merde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'ã' => 1,
      'merde' => 0,
    ),
  ),
  181 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sac',
      1 => 'ã',
      2 => 'vin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sac' => 2,
      'ã' => 1,
      'vin' => 0,
    ),
  ),
  182 => 
  array (
    'badPhrase' => 
    array (
      0 => 'salle',
      1 => 'des',
      2 => 'fêtes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'salle' => 2,
      'des' => 1,
      'fêtes' => 0,
    ),
  ),
  183 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saute',
      1 => 'au',
      2 => 'paf',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'saute' => 2,
      'au' => 1,
      'paf' => 0,
    ),
  ),
  184 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'foutre',
      2 => 'de',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'se' => 2,
      'foutre' => 1,
      'de' => 0,
    ),
  ),
  185 => 
  array (
    'badPhrase' => 
    array (
      0 => 'son',
      1 => 'hostié',
      2 => 'char',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'son' => 2,
      'hostié' => 1,
      'char' => 0,
    ),
  ),
  186 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sen',
      1 => 'battre',
      2 => 'lec',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sen' => 2,
      'battre' => 1,
      'lec' => 0,
    ),
  ),
  187 => 
  array (
    'badPhrase' => 
    array (
      0 => 'take',
      1 => 'off',
      2 => 'eh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'take' => 2,
      'off' => 1,
      'eh' => 0,
    ),
  ),
  188 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tenir',
      1 => 'votre',
      2 => 'ane',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tenir' => 2,
      'votre' => 1,
      'ane' => 0,
    ),
  ),
  189 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirer',
      1 => 'son',
      2 => 'coup',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tirer' => 2,
      'son' => 1,
      'coup' => 0,
    ),
  ),
  190 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirer',
      1 => 'un',
      2 => 'coup',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tirer' => 2,
      'un' => 1,
      'coup' => 0,
    ),
  ),
  191 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trou',
      1 => 'de',
      2 => 'balle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'trou' => 2,
      'de' => 1,
      'balle' => 0,
    ),
  ),
  192 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trou',
      1 => 'de',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'trou' => 2,
      'de' => 1,
      'cul' => 0,
    ),
  ),
  193 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trou',
      1 => 'de',
      2 => 'tchu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'trou' => 2,
      'de' => 1,
      'tchu' => 0,
    ),
  ),
  194 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trou',
      1 => 'du',
      2 => 'cul',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'trou' => 2,
      'du' => 1,
      'cul' => 0,
    ),
  ),
  195 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'as',
      2 => 'merdé',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'as' => 1,
      'merdé' => 0,
    ),
  ),
  196 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'commence',
      2 => 'menmerder',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'commence' => 1,
      'menmerder' => 0,
    ),
  ),
  197 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'fais',
      2 => 'chier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  198 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'fais',
      2 => 'chier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  199 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'fais',
      2 => 'dur',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'fais' => 1,
      'dur' => 0,
    ),
  ),
  200 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'me',
      2 => 'fatigues',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'me' => 1,
      'fatigues' => 0,
    ),
  ),
  201 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'me',
      2 => 'gonfles',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'me' => 1,
      'gonfles' => 0,
    ),
  ),
  202 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'me',
      2 => 'niaisestu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'me' => 1,
      'niaisestu' => 0,
    ),
  ),
  203 => 
  array (
    'badPhrase' => 
    array (
      0 => 'téléphoner',
      1 => 'aux',
      2 => 'congolais',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'téléphoner' => 2,
      'aux' => 1,
      'congolais' => 0,
    ),
  ),
  204 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tête',
      1 => 'de',
      2 => 'nœud',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tête' => 2,
      'de' => 1,
      'nœud' => 0,
    ),
  ),
  205 => 
  array (
    'badPhrase' => 
    array (
      0 => 'va',
      1 => 'libérer',
      2 => 'mandela',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'va' => 2,
      'libérer' => 1,
      'mandela' => 0,
    ),
  ),
  206 => 
  array (
    'badPhrase' => 
    array (
      0 => 'va',
      1 => 'tempaler',
      2 => 'encule',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'va' => 2,
      'tempaler' => 1,
      'encule' => 0,
    ),
  ),
  207 => 
  array (
    'badPhrase' => 
    array (
      0 => 'va',
      1 => 'te',
      2 => 'pendre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'va' => 2,
      'te' => 1,
      'pendre' => 0,
    ),
  ),
  208 => 
  array (
    'badPhrase' => 
    array (
      0 => 'va',
      1 => 'te',
      2 => 'tripoter',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'va' => 2,
      'te' => 1,
      'tripoter' => 0,
    ),
  ),
  209 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vais',
      1 => 'libérer',
      2 => 'mandela',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vais' => 2,
      'libérer' => 1,
      'mandela' => 0,
    ),
  ),
  210 => 
  array (
    'badPhrase' => 
    array (
      0 => 'viande',
      1 => 'à',
      2 => 'chien',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'viande' => 2,
      'à' => 1,
      'chien' => 0,
    ),
  ),
  211 => 
  array (
    'badPhrase' => 
    array (
      0 => 'you',
      1 => 'sheep',
      2 => 'fucker',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'you' => 2,
      'sheep' => 1,
      'fucker' => 0,
    ),
  ),
  212 => 
  array (
    'badPhrase' => 
    array (
      0 => 'à',
      1 => 'la',
      2 => 'mordsmoi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'à' => 2,
      'la' => 1,
      'mordsmoi' => 0,
    ),
  ),
  213 => 
  array (
    'badPhrase' => 
    array (
      0 => 'à',
      1 => 'la',
      2 => 'mordsmoilenœud',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'à' => 2,
      'la' => 1,
      'mordsmoilenœud' => 0,
    ),
  ),
  214 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'fait',
      2 => 'chier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ça' => 2,
      'fait' => 1,
      'chier' => 0,
    ),
  ),
  215 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'fait',
      2 => 'shier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ça' => 2,
      'fait' => 1,
      'shier' => 0,
    ),
  ),
  216 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'me',
      2 => 'saoûle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ça' => 2,
      'me' => 1,
      'saoûle' => 0,
    ),
  ),
  217 => 
  array (
    'badPhrase' => 
    array (
      0 => 'être',
      1 => 'la',
      2 => 'fête',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'être' => 2,
      'la' => 1,
      'fête' => 0,
    ),
  ),
  218 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bivouaquer',
      1 => 'dans',
      2 => 'la',
      3 => 'crevasse',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bivouaquer' => 3,
      'dans' => 2,
      'la' => 1,
      'crevasse' => 0,
    ),
  ),
  219 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ca',
      1 => 'me',
      2 => 'fait',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ca' => 3,
      'me' => 2,
      'fait' => 1,
      'chier' => 0,
    ),
  ),
  220 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chier',
      1 => 'dans',
      2 => 'les',
      3 => 'bottes',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chier' => 3,
      'dans' => 2,
      'les' => 1,
      'bottes' => 0,
    ),
  ),
  221 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chier',
      1 => 'dans',
      2 => 'son',
      3 => 'froc',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chier' => 3,
      'dans' => 2,
      'son' => 1,
      'froc' => 0,
    ),
  ),
  222 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chier',
      1 => 'pour',
      2 => 'la',
      3 => 'marine',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chier' => 3,
      'pour' => 2,
      'la' => 1,
      'marine' => 0,
    ),
  ),
  223 => 
  array (
    'badPhrase' => 
    array (
      0 => 'comme',
      1 => 'papa',
      2 => 'dans',
      3 => 'maman',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'comme' => 3,
      'papa' => 2,
      'dans' => 1,
      'maman' => 0,
    ),
  ),
  224 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ctun',
      1 => 'cristié',
      2 => 'bon',
      3 => 'gateau',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ctun' => 3,
      'cristié' => 2,
      'bon' => 1,
      'gateau' => 0,
    ),
  ),
  225 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enculã',
      1 => 'de',
      2 => 'mes',
      3 => 'deux',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'enculã' => 3,
      'de' => 2,
      'mes' => 1,
      'deux' => 0,
    ),
  ),
  226 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fermer',
      1 => 'son',
      2 => 'claque',
      3 => 'merde',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'fermer' => 3,
      'son' => 2,
      'claque' => 1,
      'merde' => 0,
    ),
  ),
  227 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fils',
      1 => 'de',
      2 => 'ta',
      3 => 'race',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'fils' => 3,
      'de' => 2,
      'ta' => 1,
      'race' => 0,
    ),
  ),
  228 => 
  array (
    'badPhrase' => 
    array (
      0 => 'forme',
      1 => 'woire',
      2 => 'ta',
      3 => 'geule',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'forme' => 3,
      'woire' => 2,
      'ta' => 1,
      'geule' => 0,
    ),
  ),
  229 => 
  array (
    'badPhrase' => 
    array (
      0 => 'il',
      1 => 'me',
      2 => 'fait',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'il' => 3,
      'me' => 2,
      'fait' => 1,
      'chier' => 0,
    ),
  ),
  230 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jai',
      1 => 'baisã',
      2 => 'ta',
      3 => 'mã¨re',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jai' => 3,
      'baisã' => 2,
      'ta' => 1,
      'mã¨re' => 0,
    ),
  ),
  231 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jai',
      1 => 'envie',
      2 => 'de',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jai' => 3,
      'envie' => 2,
      'de' => 1,
      'chier' => 0,
    ),
  ),
  232 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'me',
      2 => 'fais',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'je' => 3,
      'me' => 2,
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  233 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'me',
      2 => 'fais',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'je' => 3,
      'me' => 2,
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  234 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'peux',
      2 => 'violer',
      3 => 'tu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'je' => 3,
      'peux' => 2,
      'violer' => 1,
      'tu' => 0,
    ),
  ),
  235 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'veux',
      2 => 'violer',
      3 => 't',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'je' => 3,
      'veux' => 2,
      'violer' => 1,
      't' => 0,
    ),
  ),
  236 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jai',
      1 => 'baisé',
      2 => 'ta',
      3 => 'mère',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jai' => 3,
      'baisé' => 2,
      'ta' => 1,
      'mère' => 0,
    ),
  ),
  237 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jai',
      1 => 'envie',
      2 => 'de',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jai' => 3,
      'envie' => 2,
      'de' => 1,
      'chier' => 0,
    ),
  ),
  238 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mange',
      1 => 'de',
      2 => 'la',
      3 => 'merde',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mange' => 3,
      'de' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  239 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mange',
      1 => 'merde',
      2 => 'et',
      3 => 'morte',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mange' => 3,
      'merde' => 2,
      'et' => 1,
      'morte' => 0,
    ),
  ),
  240 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mange',
      1 => 'tes',
      2 => 'grands',
      3 => 'morts',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mange' => 3,
      'tes' => 2,
      'grands' => 1,
      'morts' => 0,
    ),
  ),
  241 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oh',
      1 => 'putain',
      2 => 'de',
      3 => 'merde',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'oh' => 3,
      'putain' => 2,
      'de' => 1,
      'merde' => 0,
    ),
  ),
  242 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisser',
      1 => 'de',
      2 => 'la',
      3 => 'copie',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pisser' => 3,
      'de' => 2,
      'la' => 1,
      'copie' => 0,
    ),
  ),
  243 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisser',
      1 => 'à',
      2 => 'la',
      3 => 'raie',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pisser' => 3,
      'à' => 2,
      'la' => 1,
      'raie' => 0,
    ),
  ),
  244 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'sa',
      3 => 'mère',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'putain' => 3,
      'de' => 2,
      'sa' => 1,
      'mère' => 0,
    ),
  ),
  245 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'sa',
      3 => 'race',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'putain' => 3,
      'de' => 2,
      'sa' => 1,
      'race' => 0,
    ),
  ),
  246 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'de',
      2 => 'ta',
      3 => 'race',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'putain' => 3,
      'de' => 2,
      'ta' => 1,
      'race' => 0,
    ),
  ),
  247 => 
  array (
    'badPhrase' => 
    array (
      0 => 'questce',
      1 => 'que',
      2 => 'tu',
      3 => 'branles',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'questce' => 3,
      'que' => 2,
      'tu' => 1,
      'branles' => 0,
    ),
  ),
  248 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'désenclaver',
      2 => 'la',
      3 => 'péninsule',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'se' => 3,
      'désenclaver' => 2,
      'la' => 1,
      'péninsule' => 0,
    ),
  ),
  249 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sen',
      1 => 'beurrer',
      2 => 'la',
      3 => 'raie',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sen' => 3,
      'beurrer' => 2,
      'la' => 1,
      'raie' => 0,
    ),
  ),
  250 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'mere',
      2 => 'est',
      3 => 'francaise',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'mere' => 2,
      'est' => 1,
      'francaise' => 0,
    ),
  ),
  251 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'es',
      2 => 'un',
      3 => 'putain',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tu' => 3,
      'es' => 2,
      'un' => 1,
      'putain' => 0,
    ),
  ),
  252 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'et',
      2 => 'un',
      3 => 'ane',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tu' => 3,
      'et' => 2,
      'un' => 1,
      'ane' => 0,
    ),
  ),
  253 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'me',
      2 => 'fais',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tu' => 3,
      'me' => 2,
      'fais' => 1,
      'chier' => 0,
    ),
  ),
  254 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yer',
      1 => 'fuckin',
      2 => 'a',
      3 => 'right',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yer' => 3,
      'fuckin' => 2,
      'a' => 1,
      'right' => 0,
    ),
  ),
  255 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ça',
      1 => 'me',
      2 => 'fait',
      3 => 'chier',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ça' => 3,
      'me' => 2,
      'fait' => 1,
      'chier' => 0,
    ),
  ),
  256 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cest',
      1 => 'vraiment',
      2 => 'de',
      3 => 'ta',
      4 => 'faute',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'cest' => 4,
      'vraiment' => 3,
      'de' => 2,
      'ta' => 1,
      'faute' => 0,
    ),
  ),
  257 => 
  array (
    'badPhrase' => 
    array (
      0 => 'couter',
      1 => 'la',
      2 => 'peau',
      3 => 'du',
      4 => 'cul',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'couter' => 4,
      'la' => 3,
      'peau' => 2,
      'du' => 1,
      'cul' => 0,
    ),
  ),
  258 => 
  array (
    'badPhrase' => 
    array (
      0 => 'coûter',
      1 => 'la',
      2 => 'peau',
      3 => 'du',
      4 => 'cul',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'coûter' => 4,
      'la' => 3,
      'peau' => 2,
      'du' => 1,
      'cul' => 0,
    ),
  ),
  259 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cest',
      1 => 'vraiment',
      2 => 'de',
      3 => 'ta',
      4 => 'faute',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'cest' => 4,
      'vraiment' => 3,
      'de' => 2,
      'ta' => 1,
      'faute' => 0,
    ),
  ),
  260 => 
  array (
    'badPhrase' => 
    array (
      0 => 'en',
      1 => 'avoir',
      2 => 'ras',
      3 => 'les',
      4 => 'burnes',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'en' => 4,
      'avoir' => 3,
      'ras' => 2,
      'les' => 1,
      'burnes' => 0,
    ),
  ),
  261 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foure',
      1 => 'toi',
      2 => 'les',
      3 => 'dans',
      4 => 'lchu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'foure' => 4,
      'toi' => 3,
      'les' => 2,
      'dans' => 1,
      'lchu' => 0,
    ),
  ),
  262 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'rien',
      3 => 'à',
      4 => 'cirer',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jen' => 4,
      'ai' => 3,
      'rien' => 2,
      'à' => 1,
      'cirer' => 0,
    ),
  ),
  263 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'rien',
      3 => 'à',
      4 => 'foutre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jen' => 4,
      'ai' => 3,
      'rien' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  264 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'rien',
      3 => 'ã',
      4 => 'foutre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jen' => 4,
      'ai' => 3,
      'rien' => 2,
      'ã' => 1,
      'foutre' => 0,
    ),
  ),
  265 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jva',
      1 => 'te',
      2 => 'harrer',
      3 => 'la',
      4 => 'face',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jva' => 4,
      'te' => 3,
      'harrer' => 2,
      'la' => 1,
      'face' => 0,
    ),
  ),
  266 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'me',
      2 => 'fais',
      3 => 'chier',
      4 => 'ici',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'je' => 4,
      'me' => 3,
      'fais' => 2,
      'chier' => 1,
      'ici' => 0,
    ),
  ),
  267 => 
  array (
    'badPhrase' => 
    array (
      0 => 'je',
      1 => 'te',
      2 => 'nique',
      3 => 'ta',
      4 => 'race',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'je' => 4,
      'te' => 3,
      'nique' => 2,
      'ta' => 1,
      'race' => 0,
    ),
  ),
  268 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'rien',
      3 => 'à',
      4 => 'cirer',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jen' => 4,
      'ai' => 3,
      'rien' => 2,
      'à' => 1,
      'cirer' => 0,
    ),
  ),
  269 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'meme',
      2 => 'chose',
      3 => 'a',
      4 => 'toi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'meme' => 3,
      'chose' => 2,
      'a' => 1,
      'toi' => 0,
    ),
  ),
  270 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'putain',
      2 => 'de',
      3 => 'ta',
      4 => 'mère',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'putain' => 3,
      'de' => 2,
      'ta' => 1,
      'mère' => 0,
    ),
  ),
  271 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'putain',
      2 => 'de',
      3 => 'ta',
      4 => 'race',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'putain' => 3,
      'de' => 2,
      'ta' => 1,
      'race' => 0,
    ),
  ),
  272 => 
  array (
    'badPhrase' => 
    array (
      0 => 'met',
      1 => 'la',
      2 => 'dans',
      3 => 'ta',
      4 => 'bouche',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'met' => 4,
      'la' => 3,
      'dans' => 2,
      'ta' => 1,
      'bouche' => 0,
    ),
  ),
  273 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'plus',
      2 => 'se',
      3 => 'sentir',
      4 => 'pisser',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ne' => 4,
      'plus' => 3,
      'se' => 2,
      'sentir' => 1,
      'pisser' => 0,
    ),
  ),
  274 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nique',
      1 => 'ta',
      2 => 'mère',
      3 => 'la',
      4 => 'chauve',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'nique' => 4,
      'ta' => 3,
      'mère' => 2,
      'la' => 1,
      'chauve' => 0,
    ),
  ),
  275 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nom',
      1 => 'de',
      2 => 'dieu',
      3 => 'de',
      4 => 'merde',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'nom' => 4,
      'de' => 1,
      'dieu' => 2,
      'merde' => 0,
    ),
  ),
  276 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nen',
      1 => 'avoir',
      2 => 'rien',
      3 => 'à',
      4 => 'foutre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'nen' => 4,
      'avoir' => 3,
      'rien' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  277 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putain',
      1 => 'tu',
      2 => 'mas',
      3 => 'fait',
      4 => 'peur',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'putain' => 4,
      'tu' => 3,
      'mas' => 2,
      'fait' => 1,
      'peur' => 0,
    ),
  ),
  278 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'foutre',
      2 => 'dans',
      3 => 'la',
      4 => 'merde',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'se' => 4,
      'foutre' => 3,
      'dans' => 2,
      'la' => 1,
      'merde' => 0,
    ),
  ),
  279 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trou',
      1 => 'du',
      2 => 'cul',
      3 => 'du',
      4 => 'monde',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'trou' => 4,
      'du' => 1,
      'cul' => 2,
      'monde' => 0,
    ),
  ),
  280 => 
  array (
    'badPhrase' => 
    array (
      0 => 'comme',
      1 => 'un',
      2 => 'chien',
      3 => 'fout',
      4 => 'sa',
      5 => 'merde',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'comme' => 5,
      'un' => 4,
      'chien' => 3,
      'fout' => 2,
      'sa' => 1,
      'merde' => 0,
    ),
  ),
  281 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cest',
      1 => 'de',
      2 => 'la',
      3 => 'couille',
      4 => 'de',
      5 => 'loup',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'cest' => 5,
      'de' => 1,
      'la' => 3,
      'couille' => 2,
      'loup' => 0,
    ),
  ),
  282 => 
  array (
    'badPhrase' => 
    array (
      0 => 'et',
      1 => 'mon',
      2 => 'cul',
      3 => 'cest',
      4 => 'du',
      5 => 'poulet',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'et' => 5,
      'mon' => 4,
      'cul' => 3,
      'cest' => 2,
      'du' => 1,
      'poulet' => 0,
    ),
  ),
  283 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fall',
      1 => 'down',
      2 => 'fuck',
      3 => 'in',
      4 => 'the',
      5 => 'ass',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'fall' => 5,
      'down' => 4,
      'fuck' => 3,
      'in' => 2,
      'the' => 1,
      'ass' => 0,
    ),
  ),
  284 => 
  array (
    'badPhrase' => 
    array (
      0 => 'il',
      1 => 'fait',
      2 => 'une',
      3 => 'putain',
      4 => 'de',
      5 => 'chaleur',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'il' => 5,
      'fait' => 4,
      'une' => 3,
      'putain' => 2,
      'de' => 1,
      'chaleur' => 0,
    ),
  ),
  285 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'plus',
      3 => 'rien',
      4 => 'à',
      5 => 'foutre',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'jen' => 5,
      'ai' => 4,
      'plus' => 3,
      'rien' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  286 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jen',
      1 => 'ai',
      2 => 'plus',
      3 => 'rien',
      4 => 'à',
      5 => 'foutre',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'jen' => 5,
      'ai' => 4,
      'plus' => 3,
      'rien' => 2,
      'à' => 1,
      'foutre' => 0,
    ),
  ),
  287 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'sortir',
      2 => 'les',
      3 => 'doigts',
      4 => 'du',
      5 => 'cul',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'se' => 5,
      'sortir' => 4,
      'les' => 3,
      'doigts' => 2,
      'du' => 1,
      'cul' => 0,
    ),
  ),
  288 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amène',
      1 => 'ta',
      2 => 'mère',
      3 => 'pourque',
      4 => 'je',
      5 => 'te',
      6 => 'refasse',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'amène' => 6,
      'ta' => 5,
      'mère' => 4,
      'pourque' => 3,
      'je' => 2,
      'te' => 1,
      'refasse' => 0,
    ),
  ),
  289 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avoir',
      1 => 'de',
      2 => 'la',
      3 => 'merde',
      4 => 'dans',
      5 => 'les',
      6 => 'yeux',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'avoir' => 6,
      'de' => 5,
      'la' => 4,
      'merde' => 3,
      'dans' => 2,
      'les' => 1,
      'yeux' => 0,
    ),
  ),
  290 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avoir',
      1 => 'les',
      2 => 'rideaux',
      3 => 'qui',
      4 => 'collent',
      5 => 'aux',
      6 => 'fenêtres',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'avoir' => 6,
      'les' => 5,
      'rideaux' => 4,
      'qui' => 3,
      'collent' => 2,
      'aux' => 1,
      'fenêtres' => 0,
    ),
  ),
  291 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'foutre',
      2 => 'comme',
      3 => 'de',
      4 => 'lan',
      5 => 'quarante',
      6 => 'de',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'se' => 6,
      'foutre' => 5,
      'comme' => 4,
      'de' => 0,
      'lan' => 2,
      'quarante' => 1,
    ),
  ),
  292 => 
  array (
    'badPhrase' => 
    array (
      0 => 'touche',
      1 => 'à',
      2 => 'ton',
      3 => 'cul',
      4 => 'tauras',
      5 => 'des',
      6 => 'verrues',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'touche' => 6,
      'à' => 5,
      'ton' => 4,
      'cul' => 3,
      'tauras' => 2,
      'des' => 1,
      'verrues' => 0,
    ),
  ),
  293 => 
  array (
    'badPhrase' => 
    array (
      0 => 'parle',
      1 => 'à',
      2 => 'mon',
      3 => 'cul',
      4 => 'ma',
      5 => 'tête',
      6 => 'est',
      7 => 'malade',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'parle' => 7,
      'à' => 6,
      'mon' => 5,
      'cul' => 4,
      'ma' => 3,
      'tête' => 2,
      'est' => 1,
      'malade' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 294;

