<h5>{{ $accordionClass ? ucfirst($accordionClass) : 'Default' }}</h5>
<div class="accordion-group {{ $accordionClass ? $accordionClass : '' }}">
    <div class="accordion active">
        <div class="heading">
            <h4 class="title"><a href="#">Title</a></h4>
        </div>
        <div class="content active">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloremque
                ducimus eius est fuga laudantium quia quod reiciendis rem rerum! Ab alias amet
                atque, eius et exercitationem explicabo hic impedit, labore maiores minima minus
                molestias, natus non nostrum odio officia perferendis porro quae quidem quis sed
                vero! Amet nemo, nihil!</p>
        </div>
    </div>
    <div class="accordion">
        <div class="heading">
            <h4 class="title"><a href="#">Title</a></h4>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloremque
                ducimus eius est fuga laudantium quia quod reiciendis rem rerum! Ab alias amet
                atque, eius et exercitationem explicabo hic impedit, labore maiores minima minus
                molestias, natus non nostrum odio officia perferendis porro quae quidem quis sed
                vero! Amet nemo, nihil!</p>
        </div>
    </div>
</div>