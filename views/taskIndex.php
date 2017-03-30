
<!-- Ici on va pouvoir modifier une tâche -->

<div class="main-content wrapper">
    <h1>Vos prochaines tâches</h1>
<ol class="tasks">
            <li>
            <div class="task grid">
                <div class="column--heavy">
                    <form action="index.php"
                          method="post">
                        <label for="29"
                                       class="checkbox">
                                    <input title="Changer le statut"
                                           type="checkbox"
                                           id="29"
                                           name="is_done"
                                           value="0">
                                    <span class="checkbox__label">Faire l’énoncé de l’examen</span>
                                </label>
                                <label for="description"
                                       class="textfield">
                                    <input type="text"
                                           size="40"
                                           value="Faire l’énoncé de l’examen"
                                           name="description"
                                           title="description"
                                           id="description">
                                    <span class="textfield__label">Description</span>
                                </label>
                        <input type="hidden"
                               name="r"
                               value="task">
                        <input type="hidden"
                               name="a"
                               value="postUpdate">
                        <input type="hidden"
                               name="id"
                               value="29">
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
                <div>
                    <form action="index.php"
      method="get">
    <button type="submit">modifier</button>
    <input type="hidden"
           name="a"
           value="getUpdate">
    <input type="hidden"
           name="r"
           value="task">
    <input type="hidden"
           name="id"
           value="29">
</form>                </div>
                <div>
                    <form action="index.php"
      method="post">
    <button type="submit">supprimer</button>
    <input type="hidden"
           name="a"
           value="postDelete">
    <input type="hidden"
           name="r"
           value="task">
    <input type="hidden"
           name="id"
           value="29">
</form>                </div>
            </div>
        </li>
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