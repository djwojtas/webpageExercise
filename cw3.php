<?php require 'header.php';?>
  <title>Zażółć gęślą jaźń</title>
</head>

<body>
  <div class="Title"><h1 id="h11" class="Title">Tabele i listy</h1></div>
  
  <div class="Contents">
    <h1 id="h10">Spis treści</h1>
		<ol>
          <li><a href="#h21">Tabela</a></li>
          <li><a href="#h22">Lista</a></li>
          <li><a href="#h23">Wykaz definicji</a></li>
          <li><a href="index.php">Ćwiczenie 1</a></li>
          <li><a href="cw2.php">Ćwiczenie 2</a></li>
          <li><a href="cw4.php">Ćwiczenie 4</a></li>
		</ol>
  </div>
  
  <div class="Main">
      <h2 id="h21">Tabela</h2>
      
        <table>
         <colgroup>
          <col span="6" class="MainColGroup" />
          <col class="MinorColGroup" />
         </colgroup>
         <thead>
          <tr>
           <th>Dane</th>
           <th colspan="2">Inne dane</th>
           <th colspan="4">Jeszcze inne dane</th>
          </tr>
         </thead>
         <tfoot>
          <tr>
           <td colspan="3">Suma</td>
           <td colspan="3">31</td>
           <td>33</td>
          </tr>
         </tfoot>
         <tbody>
          <tr>
            <td rowspan="2" colspan="2">2344</td>
            <td rowspan="2" colspan="2">434</td>
            <td colspan="2">343</td>
            <td>9567</td>
          </tr>
          <tr>
            <td colspan="2">3445</td>
            <td>5678</td>
          </tr>
          <tr>
            <td colspan="4">3234</td>
            <td colspan="1" rowspan="2">8778</td>
            <td colspan="1">5678</td>
            <td>2312</td>
          </tr>
          <tr>
            <td>0657</td>
            <td>4563</td>
            <td>4357</td>
            <td>0000</td>
            <td>1111</td>
            <td>8656</td>
          </tr>
         </tbody>
        </table>
      
      <h2 id="h22">Lista</h2>
      
        <ol class="ExerciseList">
          <li>Element</li>
          <li>Element</li>
          <li>Element
            <ol>
              <li>Element</li>
              <li>Element</li>
            </ol>
          </li>
          <li>Element
            <ol>
              <li>Element</li>
              <li>Element
                <ol>
                  <li>Element</li>
                  <li>Element</li>
                </ol>
              </li>
              <li>Element</li>
            </ol>
          </li>
          <li>Element</li>
        </ol>
      
      <h2 id="h23">Wykaz definicji</h2>
      
        <dl>
          <dt>Kawa</dt>
          <dd>Daje kopa</dd>
          <dt>Woda</dt>
          <dd>Nie daje kopa</dd>
        </dl>    
    <p>
      <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
      <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Poprawny CSS!" />
      </a>
    </p>
  </div>
     
  <div class="stylesList">
    
  </div>
     
</body>
</html>
