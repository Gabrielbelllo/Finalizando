
<?php include "view/header.php";?>
<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">SERVIÇO</th>
            <th scope="col"></th>
            
        </th>
    </thead>
    <tbody>

    
        <?php foreach($lista as $produto) { ?>
            <tr>
                <td><img width="50" src="../View/img/produtos/<?php echo $produto['imagem'] ?>"></td>
                  
                <td><?php echo $produto['nome']?></td>
                <td><?php echo number_format($produto['preco'],2,",",".");?></td>
               
                <td><?php // echo $produto['servico']?></td>
                <div class="linha" >
                <div class="media">
             
                <img width="50" src="../View/img/produtos/<?php echo $produto['imagem'] ?>" class="mr-3" alt="...">
                <div class="media-body">
                <h5 class="mt-0"><?php echo $produto['nome']?></h5>
                <?php echo $produto ['servico']?>
                <br>
                <?php echo number_format($produto['preco'],2,",",".");?>
                <br>
               
                
                </div>
                 </div>
                 </div>
                 
                 
  
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "view/footer.php";?>
