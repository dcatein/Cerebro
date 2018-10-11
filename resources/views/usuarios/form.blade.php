        <input type="hidden" 
            name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control"/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Idade</label>
            <input name="idade" class="form-control"/>
        </div>
        
        <div class="form-group">
            <label>Senha</label>
            <input name="senha" class="form-control"/>
        </div>

        <button class="btn btn-primary btn-block" type="Submit">Salvar</button>