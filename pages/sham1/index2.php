<?php include("../../incudes/head.php");
echo $link;

echo $header;
?>
<!-- end header  -->


<section class="article">
  <div class="contener ">

    <h2 class="main-title">عمارة المغرب والأندلس
    </h2>
  </div>
  <!-- المحاضرت -->

  <div class="contener ">
<div id="sh1"></div>



  </div>
</section>

<?php include("../../incudes/head.php");
echo $btn;
echo $footer;
echo $script;
?>
<script>
  let add = document.getElementById('sh1');



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
  a("7", 'عمارة المغرب والاندلس', "2023", 'سهام عبدالله', 'http://islami.byethost33.com/pages/sham1/m1.php')
</script>

</body>

</html>