<p>
<input name="id" type="hidden" size="10" value="<?php echo $_GET["id"]; ?>"  /></label>
   
     
   <label>Nome Completo</label>
   <input name="nome" type="text" size="50" value="<?php echo $dados["nome"]; ?>" /> <p>
   
    
   <label>CPF</label>
   <input name="cpf" type="text" size="50" value="<?php echo $dados["cpf"]; ?>" style="cursor: not-allowed;" readonly /><p>
   
  
   <label>CEP</label>
  <input name="cep" type="text" size="60" value="<?php echo $dados["cep"]; ?>" /><p>
   
     
   <label>Endereço</label>
  <input name="ende" type="text" size="50" value="<?php echo $dados["ende"]; ?>" /><p>
   
     
   <label>Bairro</label>
   <input name="bairro" type="text" size="50" value="<?php echo $dados["bairro"]; ?>" /><p>
   
     
   <label>Numero</label>
  <input name="numero" type="text" size="50" value="<?php echo $dados["numero"]; ?>" /><p>
   
       
   <label>Telefone</label>
  <input name="telefone" type="text" size="0" value="<?php echo $dados["telefone"]; ?>" /><p>
   
    <label>E-mail</label>
  <input name="email" type="text" size="0" value="<?php echo $dados["email"]; ?>" /><p>
   
       
   <label>Login</label>
   <input name="login" type="text" size="50" value="<?php echo $dados["login"]; ?>" style="cursor: not-allowed;" readonly />
   


   <label for="password">Senha </label><input type="password" name="senha" value="<?php echo $dados["senha"]; ?>" id="password" placeholder="password" /> </label>
   <label><input type="button" id="showPassword" value="Mostrar Senha" class="button" /> </label>
  
  <input type="submit" value="atualizar" />
   </form>