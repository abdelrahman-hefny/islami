<?php include("../../incudes/head.php");
echo $link;
echo $header;
?>
<!-- end header  -->


<section class="article">
  <div class="contener ">

    <h2 class="main-title">فنون فاطمي وأيوبي
    </h2>
  </div>
  <!-- المحاضرت -->

  <div class="contener ">


    <div class=" boxes2" id="asam">
      <!-- box -->

    </div>
  </div>
</section>

<?php include("../../incudes/head.php");
echo $btn;
echo $footer;
echo $script;
?>

<script>
  let add = document.getElementById('asam');



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
  a("1", "تاريخ", "2023", "صالح", "#")
</script>

</body>

</html>