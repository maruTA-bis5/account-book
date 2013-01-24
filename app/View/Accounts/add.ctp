<div class="row-fluid">
  <div class="span8">
    <h2>収支記録の登録</h2>
    <?php
    echo $this->Form->create('Account');
    echo $this->Form->input('date', array('dateFormat'=>'YMD','type' => 'date'));
    echo $this->Form->input('kind_id');
    echo $this->Form->input('yen');
    echo $this->Form->input('memo');
    echo $this->Form->hidden('user_id',array('value'=>$user['id']));
    ?>
    <input type="submit" value="登録実行" class="btn btn-primary">
    </form>
  </div>

  <div class="span4">
    <?php echo $this->element('codelist'); ?>
  </div>
</div>
