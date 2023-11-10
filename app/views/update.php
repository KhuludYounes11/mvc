<html>
    <head>
        <title>User List</title>
</head>
<body>
    <h1>Update User</h1>
    <?php foreach ($users as $user)
    {?>
    <form  method='post' action="update?id=<?php echo $user['id'] ?>">
        <input type='hidden' name='id' >
        <input type='text' name='username'  value=<?php echo $user['username']?>   placeholder='username' required ><br>
        <input type='password' name='password'  value=<?php echo $user['password']?>   placeholder='password' required><br>
        <input type="email" name="email"  value=<?php echo $user['email']?>   placeholder="email" required><br>
        <h7>Gender</h7>
        <select name="gender"  value=<?php echo $user['gender']?> >
           
           <option value="Male">Male</option>   
            <option value="Fmale">Fmale</option>
       </select><br>    
       <input type="text" name="birthday"  value=<?php echo $user['birthday']?>  placeholder="birthday"><br>
       <h7>Rule</h7>
        <select name="rule"  value=<?php echo $user['rule']?>  >
         
           <option value="0">0</option>   
            <option value="1">1</option>
       </select>
        <input type='submit' name='submit' placeholder='Update User'>
    <?php }?>
</form>
</body>
    </html>