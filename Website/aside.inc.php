<style>
   aside {
       padding: 10px; 
       border-top: 1px solid #E2EAEF;
       border-left: 1px solid #E2EAEF;
       background-color: #f3f6f8;
       position: fixed; 
       top: 0; 
       right: 0; 
       width: 20%; 
       height: 100%; 
       overflow-y: auto; 
       box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1); 
   }

   main {
       margin-right: 20%; 
   }
</style>

<aside>
   <h2>Real-time Inventory Info</h2>
   <hr>
   <br>
   <h3>Category Count: </h3><span id="categorycount"></span>
   <br><br>
   <h3>Item Count: </h3><span id="itemcount"></span>
   <br><br>
   <h3>List Price Total: </h3><span id="listpricetotal"></span>
   <br><br>
   <h3>Wholesale Price Total: </h3><span id="wholesaletotal"></span>
</aside>
