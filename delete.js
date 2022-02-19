function deleteUser(id){
    let confirmDelete = confirm("¿Seguro que deseas eliminar este usuario?");
    if (confirmDelete === true){
        window.location = './deleteUser.php?id=' + id;
    }
}