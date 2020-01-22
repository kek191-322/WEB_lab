var app = new Vue ({
    el:'#form',
    data:{
        showComment: true,
        editForm:{
            name:'',
            lastName: ''
        },
        names: []
    },
    methods: {
        addName(){
            this.names.push(this.editForm.name + ' ' + this.editForm.lastName)
            for (key in this.editForm){
                this.editForm[key] = ''
            }
            this.showComment = false
        },
        clearForm(){
            for (key in this.editForm){
                this.editForm[key] = ''
            }
        }
    }


})