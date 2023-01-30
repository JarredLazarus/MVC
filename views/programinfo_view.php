<table class = "container" >  
      <tbody>  
         <tr >
            <td><b>Program Code</b></td>  
            <td><b>Program Name<b></td>  
            <td><b>Summary</b></td>
         </tr>  
        <?php foreach ($program->result() as $row): ?>  
            <tr>  
            <td><?php echo $row->program_code;?></td>  
            <td><?php echo $row->program_name;?></td>  
            <td><?php echo $row->summary;?></td>  
            </tr>  
         <?php endforeach; ?>
 	
           
      </tbody>  
   </table>  

<style type="text/css">





table, th, td, tr {
   padding-left: 100px;
   border: 3px solid white;
   border-collapse: collapse;
   border-spacing: 10px;
   background-color: #165883;
   padding: 15px;
   color: #fff;
   font-size: 25px;
   border-radius:1rem;
}


b {
   font-size: 26px;
}

   </style>