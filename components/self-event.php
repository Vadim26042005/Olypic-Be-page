<?php
$events = [];

$result = mysqli_query($conn, "SELECT * FROM events");
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $events[] = $row;
    }
}
?>

<?php foreach($events as $event): ?>
        <?php if (!isset($_SESSION['user_id'])): ?>



        <?php elseif (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $event['user_id']) : ?>
                <div class="event-block">
                    <form action="be-events/update-data.php" method="post">
                        
                            <label for="event_name">Nom de l'événement</label>
                            <input type="text" name="event_name" value="<?php echo htmlspecialchars($event['event_name']); ?>">
                            <label for="event_description">Description</label>
                            
                            <textarea name="event_description" maxlength="500" rows="5" cols="10"><?php echo htmlspecialchars($event['event_description']); ?></textarea>
                            
                            <label for="nb_participant">Nombre de joueurs</label>
                            <input type="text" name="nb_participant" value="<?php echo htmlspecialchars($event['nb_participant']);?>">
                            
                            <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                            <button type="submit">Appliquer les modifications</button>
                        
                    </form>
                    <form action="be-events/delete-event.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $event['id']; ?>">
                        <button type="submit" style="background-color: #F75A5A; color: white;">Supprimer</button>
                    </form>
                </div>
                
                
            
            
        <?php endif; ?>
    <?php endforeach;?>