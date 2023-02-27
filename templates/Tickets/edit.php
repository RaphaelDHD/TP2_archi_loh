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
              echo $this->Form->create($ticket, ['class' => 'form-horizontal style-form']);
              ?>
              <div class="form-group">
                <div class="col-sm-10">
                  <?php
                  echo $this->Form->control("title", ['class' => 'form-control', 'label' => 'titre']);
                  ?>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <?php
                  echo $this->Form->control("description", [
                    'class' => 'form-control', 'type' => 'textarea', 'id' =>  'inputContent', 'label' => [
                      'text' => 'Description complète du ticket',
                      'for' => 'inputContent',
                      'class' => 'col-sm-2 control-label',
                      'escapeTitle' => false
                    ]
                  ]);
                  ?> </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <?php
                  echo $this->Form->select(
                    'level',
                    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                    [
                      'class' => 'form-control',
                      'label' => [
                        'text' => 'Niveau d urgence',
                        'class' => 'col-sm-2 col-sm-2 control-label'
                      ]
                    ]
                  );
                  ?>
                </div>
              </div>
              <div class="pull-right">
                <?php
                //echo $form->input("", ['type' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Enregistrer']);
                echo $this->Form->submit('Enregistrer', ['class' => 'btn btn-primary']);
                ?>
              </div>
              <?php
              //$form->end();
              echo $this->Form->end();
              ?>
            </div>
          </div>
        </section>
      </div>
    </div>

  </section>
</section>