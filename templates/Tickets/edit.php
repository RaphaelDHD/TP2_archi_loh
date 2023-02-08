<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Ajouter un ticket</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                <?php
                  echo $form->open(['class' => 'form-horizontal style-form']);
                ?>
                    <div class="form-group">
                      <?php 
                        echo $form->label("Titre du ticket", ['for' => 'inputTitle', 'class' => 'col-sm-2 col-sm-2 control-label']);
                      ?>
                      <div class="col-sm-10">
                        <?php
                          echo $form->input("title", ['type' => 'text', 'class' => 'form-control', 'id' => 'inputTitle', 'name' => 'title', 'label' => false]);
                        ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <?php 
                        echo $form->label("Description complète du ticket", ['for' => 'inputContent', 'class' => 'col-sm-2 col-sm-2 control-label']);
                      ?>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputContent" name="description"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <?php 
                        echo $form->label("Niveau d'urgence", ['for' => 'inputSelect', 'class' => 'col-sm-2 col-sm-2 control-label']);
                      ?>
                      <div class="col-sm-10">
                        <select id="inputSelect" class="form-control" name="level">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </div>
                    </div>
                    <div class="pull-right">
                      <?php 
                        echo $form->input("", ['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Enregistrer']);
                      ?>
                    </div>
                      <?php
                        $form->end();
                      ?>
                  </div>
              </div>
            </section>
          </div>
        </div>
        
      </section>
    </section>