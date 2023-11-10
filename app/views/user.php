<html>
    <head>
        <title>User List</title>
</head>
<body>
    <h1>List User</h1>
    <ul>
    <?php
    foreach($users as $user){?>
     <li><?= $user['username'];?>
     <a href='update?id=<?php echo $user['id']?>'>Update</a>
     <a href='delete?id=<?php echo $user['id']?>'>Delete</a></li>
     <?php } ?>
    </ul>
    <h1>Add User</h1>
    <form  method='post' action="add">
        <input type='text' name='username' placeholder='username' required ><br>
        <input type='password' name='password' placeholder='password' required><br>
        <input type="email" name="email" id="email" placeholder="email" required><br>
        <h7>Gender</h7>
        <select name="gender" title="gender choose male or fmale">
           <option display selected>choose</option>
           <option value="Male">Male</option>   
            <option value="Fmale">Fmale</option>
       </select><br>    
       <input type="text" name="birthday" id="birthday" placeholder="birthday"><br>
       <h7>Rule</h7>
        <select name="rule" title="rule choose 0 or 1">
           <option display selected>choose</option>
           <option value="0">0</option>   
            <option value="1">1</option>
       </select>
        <input type='submit' name='submit' placeholder='Add User'>

</form>
</body>
    </html>