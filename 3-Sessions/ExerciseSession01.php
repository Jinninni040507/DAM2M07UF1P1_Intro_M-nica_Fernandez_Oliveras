<?php
    session_start();

    // inicializar el inventario si no tiene ningún valor establecido anteriormente.
    if (!isset($_SESSION['inventory'])) {
        $_SESSION['inventory'] = 
        [
            'Soft Drink' => 0,
            'Milk' => 0,
        ];
    }

    // Guardar el nombre del trabajador si se ha enviado por petición, para despues volvorlo a pones en el input del nombre.
    if (isset($_GET['worker'])) {
        $_SESSION['worker'] = $_GET['worker'];
    }

    // Guardar el tipo de bebida y la cantidad para poder hacer las operaciones que convengan para actualizar el inventario.

        // funcion para recoger el valor de el tipo de bebida
        function getTypeOfDrink ():string{
        $type="";
        if (isset($_GET['drinks'])) {
            $type= $_GET['drinks'];
        }
        return $type;
    }

        // funcion para recoger la cantidad que quiere
    function getQuantity ():int{
        $quantity=0;
        if (isset($_GET['quantity'])) {
            $quantity = $_GET['quantity'];
        }
        return $quantity;
    }

        // funcion de mostrar un error si los paramentros de nombre y cantidad no estan seteados
        $error_smth_not_set="";
        function func_smth_not_set ():bool{

        if (isset($_GET['worker'])&&$_GET['worker']=="" ) {
            $GLOBALS['error_smth_not_set']="Worker's name is not setted";
            return false;
        } elseif (isset($_GET['quantity']) && $_GET['quantity']=="") {
            $GLOBALS['error_smth_not_set']="Quantity is not setted";
            return false;
        } elseif (isset($_GET['quantity']) && $_GET['quantity']==0) {
            $GLOBALS['error_smth_not_set']="Quantity cannot be 0";
            return false;
        } 
        
        return true;
    }

    // If statement para poder controlar que tipo de operación quiere hacer el usuario, y operar según la elección

    $show_error="";

    if (isset($_GET['submit'])) {
        switch ($_GET['submit']) {
            case 'add':
                if (func_smth_not_set ()) {
                    $_SESSION['inventory'][getTypeOfDrink()]+=getQuantity();
                } else {
                    func_smth_not_set ();
                }
                break;
            
            case 'remove':

                if (func_smth_not_set ()) {
                    if (getQuantity()>$_SESSION['inventory'][getTypeOfDrink()]) {
                        $show_error = "You cannot remove more drinks than what there is established below.";
                    } else{
                        $_SESSION['inventory'][getTypeOfDrink()]-=getQuantity();
                    }
                } else {
                    func_smth_not_set ();
                }
    
                break;
            
            case 'reset':
                session_destroy();
                $_SESSION['inventory'] = 
                [
                    'Soft Drink' => 0,
                    'Milk' => 0,
                ];

                $_SESSION['worker'] = $_GET['worker'];

                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management</title>
</head>
<body>
    <form action="ExerciseSession01.php" method="get">
        <h1>Supermarket Management</h1>
        <?php if (!func_smth_not_set ()) {
            echo $error_smth_not_set;
        }?>
        <br>

        Worker name: <input type="text" name="worker" value="<?php echo $_SESSION['worker'];?>" >
        
        <br><br>
    
        <h2>Choose product</h2>
        <select id="drinks" name="drinks">
            <option value="Soft Drink">Soft Drink</option>
            <option value="Milk">Milk</option>
        </select>
        
        <br><br>
    
        <h2>Product quantity</h2>
        <?php echo $show_error;?>
        <br>
        <input type="number" id="quantity" name="quantity" min="1" value="1">
        <br><br>
        <input type="submit" value="add" name="submit">
        <input type="submit" value="remove" name="submit">
        <input type="submit"  value="reset" name="submit">
        
        <br><br>
        
        <h2>Inventory</h2>
        <p>Worker: <?php echo (!isset($_SESSION['worker']))?"Worker name is not defined":$_SESSION['worker'];?></p>
        <p>Units Soft drink: <?php echo $_SESSION['inventory']['Soft Drink'];?> </p>
        <p>Units milk: <?php echo $_SESSION['inventory']['Milk'];?></p>

    </form>

</body>
</html>
<?php
    
?>