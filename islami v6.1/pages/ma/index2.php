<?php include("../../incudes/head.php");
echo $link;

echo $header;
?>
<!-- end header  -->

<section class="article">
  <div class="contener ">

    <h2 class="main-title">اعمال سنه
    </h2>
  </div>
  <!-- المحاضرت -->

  <div class="contener ">

    <!-- box -->
    <div class=" boxes2" id='ma'>


    </div>
</section>

<?php include("../../incudes/head.php");
echo $btn;
echo $footer;
echo $script;
?>
<script>
  let add = document.getElementById('ma');



  function a(m, name, p, doc, url) {
    add.innerHTML += `
   <!-- box -->
   <div class="box m${m} ">
     <a href="${url}">
       <div class="m${m}">
         <h4>${name} </h4>
         <p>${p}</p>
         <h3 class="h${m}">${doc}</h3>
       </div>
     </a>
   </div>

`;
  }
  a("5", 'اعمال سنه', "2023", 'محمود وسعود', '#')
</script>

</body>

</html>