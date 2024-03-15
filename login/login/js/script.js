class Sesion {
    constructor(usuario, pass, bdusuario, bdpwd){
        this.usuario=usuario
        this.pass= pass
        this.bdusuario=bdusuario
        this.bdpwd=bdpwd
    }
    /*
    validar (){
        if(this.usuario== this.bdusuario && this.pass == this.bdpwd){
            // alert('Inicio de sesión exitoso,')
            alertify.success('Inicio de sesión exitoso');
            // window.location.href = 'registro.html';
        }else {
          //  alert('Las credenciales no son correctas.')
            alertify.success('Las credenciales no son correctas');
        }
    }
    */
    validar (){
        if (this.usuario=== this.bdusuario) {
            if (this.pass === this.bdpwd){
                window.location.href = "registro.html";
            }else {
                alertify.error('contraseña incorecta');
            }
            
        }else {
            alertify.error('usuario incorecto');
        }
    }
}


class usuario extends Sesion{
    constructor(usuario, pass, bdusuario, bdpwd){
        super(usuario, pass, bdusuario, bdpwd)
    }
}

function login (){
    let user = document.getElementById('user').value
    let pwd = document.getElementById('pwd').value

    Consulta = new usuario(user,pwd,'William','123')
    Consulta.validar()

}