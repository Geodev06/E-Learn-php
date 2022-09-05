<style type="text/css">
    #Cnt {
        display: block;
        position: fixed;
        z-index: 1;
        height: 100%;
        width: 100%;
        background-color: transparent;
    }
    #myAlert {
        border :0;
        height: 250px;
        width: 100%;
        background: rgb(255, 0, 77);
        box-shadow: 0 14px 18px 0 rgb(32,32,32), 0 16px 30px 0 rgba(255, 0, 77, 0.19);
    }
    #lbNot {
        padding-top: 0px;
        font-family: 'Calibri light';
        font-size: 14px;
        color:white;
        letter-spacing: 1px;
    }
    #lbNot1 {
        padding-top: 0px;
        font-family: 'Calibri light';
        font-size: 12px;
        color:white;
        letter-spacing: 1px;
    }
    .Pr {
        font-family: 'Calibri';
        font-size: 30px;
        color:white;
    }
    #mybtnclose {
        border: 0;
        font-family: 'Calibri light';
        font-size: 12px;
        color: white;
        width: 120px;
        height: 30px;
        border-radius: 25px;
        box-shadow: 0 4px 8px 0 rgb(32,32,32), 0 16px 30px 0 rgba(255, 0, 77, 0.19);
        background-color: dodgerblue;
        transition: transform .2s;
        transform: scale(.9);
        outline: none;
    }
    #mybtnclose:hover {
        border: 0;
        transform: scale(1);
        font-family: 'Calibri light';
        font-size: 12px;
        color: white;
        width: 120px;
        height: 30px;
        border-radius: 25px;
        box-shadow: 0 14px 18px 0 rgb(32,32,32), 0 16px 30px 0 rgba(255, 0, 77, 0.19);
    }
 @keyframes unfoldIn {
  0% {
    transform:scaleY(.005) scaleX(0);
  }
  50% {
    transform:scaleY(.005) scaleX(1);
  }
  100% {
    transform:scaleY(1) scaleX(1);
  }
}

@keyframes unfoldOut {
  0% {
    transform:scaleY(1) scaleX(1);
  }
  50% {
    transform:scaleY(.005) scaleX(1);
  }
  100% {
    transform:scaleY(.005) scaleX(0);
  }
}
.unfoldIn
{
    animation:unfoldIn 2s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
}
.unfoldOut
{
    animation:unfoldOut 2s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
}
</style>
<?php  if (count($errors) > 0) : ?>
    <div id="Cnt" >
        <?php foreach ($errors as $error) : ?>
            <div id="Cntm" class="text-center pt-4 unfoldIn">
                <div class="pt-5 p-5">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div  id="myAlert">
                                <br>
                                <h5 class="text-white Pr"><i class="far fa-dizzy text-white"></i> Message </h5>
                                <p id="lbNot">Error : <?php echo $error ?></p>
                                <p id="lbNot1">Errors.jpeg</p>
                                <input type="button" name="" value="Close" id="mybtnclose">
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php  endif ?>
