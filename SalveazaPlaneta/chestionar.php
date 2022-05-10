  <div id="chestionar">
    <button class="btn1" onclick="utilizatorNou()">Utilizator nou?</button>
    <button class="btn2" onclick="location.href='rezultate_alti_utilizatori.php';">Vezi și alți utilizatori</button>
  </div>


<div class="detalii" id="detalii">
    <h2 style="color:#594a4e;">Scrie-ne câteva detalii despre tine!</h2>

    <label>Nume</label>
    <input type="text" id="nume" name="nume" pattern="[^()/><\][\\\x22,;|]+" >
        <br>

    <label>Prenume</label>
    <input type="text" id="prenume" name="prenume" pattern="[^()/><\][\\\x22,;|]+" ><br><br>

    <label>Email</label>
    <input type="text" id="email" name="email" pattern="[^()/><\][\\\x22,;|]+" ><br>

    <label>Data Nașterii</label>
    <input type="date" id="data_nasterii" name="data_nasterii"><br><br>

    <label>Hobby-uri</label><br>
    <textarea id="hobby" cols="40" rows="10" style="width:100%; background-color:rgba(0, 0, 0, 0.1); resize:none;" id="hobby" name="hobby" pattern="[^()/><\][\\\x22,;|]+"></textarea>

    <button onclick="urmatorulPrimul()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="masina">
    <h2 style="color:#594a4e;">Dacă deții o mașină, spune-ne și ce consum are?</h2>
    <img src="Resources/masina.jpg" id="pozamasina">
    <br>
    <label>Consum echivalent</label>
    <input type="number" id="consum_masina">
    <label>l/100km</label><br><br>
    <p style="font-size: 13px;">* În caz de nu ai mașină, poți introduce 0 sau să apeși "Următorul".</p>
    <button onclick="urmatorulDoi()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="plimbarea">
    <h2 style="color:#594a4e;">Care răspunsuri ți se potrivesc ție mai bine?</h2>

    <input type="radio" id="r1" name="primulraspuns" style="width: auto;" value="Îmi place să mă plimb mai des cu bicicleta și/sau pe jos, iar ocazional folosesc autobuzul!"><label>Îmi place să mă plimb mai des cu bicicleta și/sau pe jos, iar ocazional folosesc autobuzul!</label><br>

    <input type="radio" id="r2" name="primulraspuns" style="width: auto;" value="Îmi place să mă plimb mai des cu mașina, dar nu folosesc nici autobuzul, dar nici bicicleta!"><label>Îmi place să mă plimb mai des cu mașina, dar nu folosesc nici autobuzul, dar nici bicicleta!</label><br>

    <input type="radio" id="r3" name="primulraspuns" style="width: auto;" value="Îmi place să mă plimb mai des cu autobuzul și/sau mașina!"><label>Îmi place să mă plimb mai des cu autobuzul și/sau mașina!</label><br><br>

    <button onclick="urmatorulTrei()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="energie">
    <h2 style="color:#594a4e;">Folosești panouri solare?</h2>
    <img src="Resources/panouri.jpg"  id="panousolar">
    <br>
    <input type="radio" id="r4" name="aldoilearaspuns" style="width: auto;" value="Da!"><label>Da!</label><br>

    <input type="radio" id="r5" name="aldoilearaspuns" style="width: auto;" value="Nu!"><label>Nu!</label><br><br>

    <button onclick="urmatorulPatru()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="reciclare">
    <h2 style="color:#594a4e;">Cât de mult reciclezi?</h2>
    <img src="Resources/reciclare.png"  id="reciclaregunoi">
    <br>
    <input type="radio" id="r6" name="altreilearaspuns" style="width: auto;" value="Deloc!"><label>Deloc!</label><br>

    <input type="radio" id="r7" name="altreilearaspuns" style="width: auto;" value="Câteodată!"><label>Câteodată!</label><br>

    <input type="radio" id="r8" name="altreilearaspuns" style="width: auto;" value="Foarte Des!"><label>Foarte Des!</label><br><br>

    <button onclick="urmatorulCinci()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="ulei">
    <h2 style="color:#594a4e;">Ce faci cu uleiul alimentar utilizat? Îl arunci la gunoi, în chiuvetă?</h2>
    <img src="Resources/ulei.jpg" id="reciclareulei">
    <br>
    <input type="radio" id="r9" name="alpatrulearaspuns" style="width: auto;" value="Da, îl arunc la gunoi/în chiuvetă!"><label>Da, îl arunc la gunoi/în chiuvetă!</label><br>

    <input type="radio" id="r10" name="alpatrulearaspuns" style="width: auto;" value="Nu! Îl duc la un centru de reciclat."><label>Nu! Îl duc la un centru de reciclat.</label><br><br>
    
    <button onclick="urmatorulSase()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="copaci">
    <h2 style="color:#594a4e;">Câți copaci plantezi de obicei?</h2>
    <img src="Resources/copac.jpg"  id="copaciplantati">
    <br>
    <input type="range" id="Range" min="1" max="100" value="50"  id="numar_copaci"><span id="value">copaci</span><span> copaci/an</span><br><br>
    
    <button onclick="urmatorulSapte()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="foc">
    <h2 style="color:#594a4e;">Arzi diverse deșeuri în interioul unei clădiri sau în afara sa?</h2>
    <img src="Resources/deseuri.jpg"  id="deseuriarse">
    <br>
    <input type="radio" id="r11" name="alcincilearaspuns" style="width: auto;" value="Da!"><label>Da!</label><br>

    <input type="radio" id="r12" name="alcincilearaspuns" style="width: auto;" value="Nu!"><label>Nu!</label><br><br>
    
    <button onclick="urmatorulOpt()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>


<div id="curentelectric">
    <h2 style="color:#594a4e;">Câți kilowați-oră consumați pe lună?</h2>
    <img src="Resources/curent.jpg" id="curentelectricpoza">
    <br>
    <label>Consum</label>
    <input type="number" id="curentelectric1">
    <label>kWh</label>
    <br><br>
     <p style="font-size: 13px;">* Consumul se poate vedea pe factura de curent.</p>
    <button onclick="urmatorulNoua()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>

<div id="gaz">
    <h2 style="color:#594a4e;">Câți metri cubi de gaz consumați pe lună?</h2>
    <img src="Resources/gaz.jpg" id="pozagaze">
    <br>
    <label>Consum</label>
    <input type="number" id="gaze">
    <label>m^3</label>
    <br><br>
      <p style="font-size: 13px;">* Consumul se poate vedea pe factura de gaze.</p>
    <button onclick="urmatorulZece()" style="width:90px; float:right; background: #7f5af0; color:white; height: 30px;">Următorul</button>
</div>

<div id="parere" >
    <h2 style="color:#594a4e;">Ești dispus să renunți la anumite plăceri numai ca să îți salvezi planeta?</h2>
    <img src="Resources/pamantul.jpg" id="parerepoza">
    <br>
    <input type="radio" id="r13" name="alsaselearaspuns" style="width: auto;" value="Da!"><label>Da!</label><br>

    <input type="radio" id="r14" name="alsaselearaspuns" style="width: auto;" value="Nu!"><label>Nu!</label><br><br>
    <br><br>

    <button onclick="urmatorulFinal()" style="width:90px; float:right; background: #7f5af0; color:white; height: 40px;">Afișează rezultatul!</button>
</div>

 <form method="post" action="Functions/upload.php" id="rezultat">
        <h2 style="color:#594a4e;">Scor final!</h2>
        <input type="range" id="endresult" min="1" max="100" disabled>
        <p style="float:left;">Faci un rău planetei!</p>
        <p style="float:right;">Salvezi planeta!</p><br><br>
        <table></table><br><br>
        <input type="text" id="nume1" name="nume1" value="1" >
        <input type="text" id="prenume1" name="prenume1" >
        <input type="text" id="email1" name="email1" >
        <input type="text" id="data_nasterii1" name="data_nasterii1" >
        <input type="text" id="hobby1" name="hobby1" >
        <input type="text" id="CO2_masina1" name="CO2_masina1" >
        <input type="text" id="raspuns11" name="raspuns11">
        <input type="text" id="raspuns21" name="raspuns21" >
        <input type="text" id="raspuns31" name="raspuns31" >
        <input type="text" id="raspuns41" name="raspuns41" >
        <input type="text" id="Range1" name="Range1" >
        <input type="text" id="raspuns51" name="raspuns51" >
        <input type="text" id="CO2_curent1" name="CO2_curent1">
        <input type="text" id="CO2_gaze1" name="CO2_gaze1" >
        <input type="text" id="raspuns61" name="raspuns61" >
        <input type="text" id="score1" name="score1" >


        <button onclick="location.href = 'content.php';" id="inapoi">Înapoi</button>
        <button type="submit" name="submit"  id="salveazadatele">Salvează datele!</button>
</form>


<script>
    var slider = document.getElementById("Range");
    var output = document.getElementById("value");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
</script>