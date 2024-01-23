<?php include("../../incudes/head.php");
echo $link;

echo $header;
?>
<!-- end header  -->



<section class="article">
  <div class="contener ">

    <h2 class="main-title">تدريبات ميدانية
    </h2>
  </div>
  <!-- المحاضرت -->

  <div class="contener ">

    <!-- box -->
    <di id="sh2"></di>

  </div>
</section>

<?php include("../../incudes/head.php");
echo $btn;
echo $footer;
echo $script;
?>
<script>
  let add = document.getElementById('sh2');



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
  a("4", 'تدريبات ميدانية', "2023", 'سهام عبدالله', '#')
</script>

</body>

</html>