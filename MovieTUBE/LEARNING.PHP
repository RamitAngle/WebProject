<!DOCTYPE html>
 <html lang="en">
     <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Today's Deals</title> 
         <style> .container { padding: 20px; } 
         .card { background-color: #ffffff; 
         padding: 20px; margin: 20px; 
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         border-radius: 5px; } 
         
         .card img { 
            width: 100%; height: auto; } 
            
        .card h5 { margin-top: 10px; } 
        .card p { margin: 0; } 
        </style> 
        </head> 
        <body> 
            <div class="container"> 
                <h2>Today's Deals</h2> 
        <div class="row"> 
            <?php // Sample deals data $deals = [ [ 'title' => 'Bata, Hush Puppies', 'description' => 'Men\'s Footwear', 'image' => 'bata-hush-puppies.jpg', 'price' => '$40' ], [ 'title' => 'Gerbera Bend-to-Grip Frying Pan', 'description' => 'Kitchen & Dining', 'image' => 'gerbera-frying-pan.jpg', 'price' => '$12' ], [ 'title' => 'Canon PowerShot SX610 HS Digital Camera', 'description' => 'Electronics', 'image' => 'canon-powershot-sx610-hs.jpg', 'price' => '$89' ],foreach ($deals as $deal) {
        echo '<div class="card">';
        echo '<img src="' . $deal['image'] . '" alt="' . $deal['title'] . '">';
        echo '<h5>' . $deal['title'] . '</h5>';
        echo '<p>' . $deal['description'] . '</p>';
        echo '<p>' . $deal['price'] . '</p>';
        echo '</div>';
    ?>
</div>