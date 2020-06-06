    <main class="adminPage">
        <div class="container">

            <button type="button" class="collapsible"> Projects & tasks</button>
            <div class="content listNewTasks">

                <button class="open-button" onclick="openForm()">+ Add new project/task</button>

                <div class="form-popup" id="myForm">
                    <form action="#" class="form-container">
                      <h3>Add new project/task</h3>
                      
                      <div class="formLabel">
                            <label for="nameProject"><b>Project name</b></label>
                            <input type="text" placeholder="Naziv projekta" name="nameProject" required>
                    </div>
                    <div class="formLabel">
                        <label for="descriptionTask"><b>Task</b></label>
                        <input type="text" placeholder="Zadatak" name="descriptionTask" required>
                    </div>
                    <div class="submited">
                        <button type="submit" class="btn"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn cancel" onclick="closeForm()"><i class="fas fa-times"></i></button>
                    </div>
                    </form>
                  </div>
                <ul>
                    <li> <h4 class="descriptionTask">Task 2 </h4>  <div class="addTask"><i class="fas fa-edit"></i>  <i class="fas fa-trash-alt"></i></div></li>
                    <li> <h4 class="descriptionTask">Task 3 </h4>  <div class="addTask"><i class="fas fa-edit"></i>  <i class="fas fa-trash-alt"></i></div></li>
                    <li> <h4 class="descriptionTask">Task 4 </h4>  <div class="addTask"><i class="fas fa-edit"></i>  <i class="fas fa-trash-alt"></i></div></li>
                    <li> <h4 class="descriptionTask">Task 5 </h4>  <div class="addTask"><i class="fas fa-edit"></i>  <i class="fas fa-trash-alt"></i></div></li>
                    <li> <h4 class="descriptionTask">Task 6 </h4>  <div class="addTask"><i class="fas fa-edit"></i>  <i class="fas fa-trash-alt"></i></div></li>

                </ul>
            </div>

            <button type="button" class="collapsible"> List all developers</button>
            <div class="content allDevelopers">

                <button class="open-button" onclick="openForm1()">+ Add new developer</button>

                <div class="form-popup" id="myForm1">
                    <form action="#" class="form-container">
                      <h3>Add new developer</h3>
                      
                      <div class="formLabel">
                        <label for="firstName"><b>Name:</b></label>
                        <input class="input_text" type="text" placeholder="Ime" name="firstName" required>
                    </div>
                    <div class="formLabel">
                        <label for="lastName"><b>Lastname:</b></label>
                        <input class="input_text" type="text" placeholder="Prezime" name="lastName" required>
                    </div>
                    <div class="formLabel">
                        <label for="userName"><b>User name:</b></label>
                        <input class="input_text" type="text" placeholder="Korisničko ime" name="userName" required>
                    </div>
                    <div class="formLabel">
                        <label for="email"><b>Email:</b></label>
                        <input class="input_text" type="email" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="submited">
                        <button type="submit" class="btn"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn cancel" onclick="closeForm1()"><i class="fas fa-times"></i></button>
                    </div>
                    </form>
                  </div>
                <ul>
                    
                        <<?php foreach ($allUsers as $key ): ?>
                        <li> <h4 class="descriptionDeveloper">
                        <?php foreach ($key as $value): ?>
                            <?php echo $value ?>
                        <?php endforeach ?>
                        </h4>  <div class="editDeveloper"> <i class="fas fa-user-edit"></i>  <i class="fas fa-user-minus"></i></i></div>
                    </li>
                    <?php endforeach ?>
                    
                   
                </ul>
            </div>

            <button type="button" class="collapsible"> Developer tasks</button>
            <div class="content schedule">
                <ul>
                    <li> <h4 class="nameDev">Dev 1 </h4> <br>
                        <ul>
                            <li> Task 1</li>
                            <li> Task 2</li>
                        </ul>
                    </li>
                    <li> <h4 class="nameDev">Dev 2 </h4><br>
                        <ul>
                            <li> Task 1</li>
                            <li> Task 2</li>
                        </ul>
                    </li>
                    <li> <h4 class="nameDev">Dev 3 </h4> <br>
                        <ul>
                            <li> Task 1</li>
                            <li> Task 2</li>                        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </main>