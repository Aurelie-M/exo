<!-- La page qui est établie quand on a aucune tâche -->

<div class="main-content wrapper">
    <h1>Vos prochaines tâches</h1>
<ol class="tasks">
    </ol>
<hr>
<h1>Ajouter une tâche</h1>
<form action="index.php"
      method="post">
        <label for="description"
           class="textfield"><input type="text"
                                    name="description"
                                    id="description"
                                    size="80">
        <span class="textfield__label">Description</span>
    </label>
    <input type="hidden"
           name="r"
           value="task">
    <input type="hidden"
           name="a"
           value="create">
    <button type="submit">Créer cette nouvelle tâche</button>
</form></div>