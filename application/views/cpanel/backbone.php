<script>
    var Person = Backbone.Model.extend({
      default:{
        name :'John Doe',
        age : 45
      }
    });

    var PersonView = Backbone.View.extend({
      tagName: 'li',

      template: _.template( $('#person-template').html() ),

      initialize :function() {
        this.render();
      },

      render: function() {
        this.$el.html( this.model.get('name') );
      }
    });

    var person = new Person({'name':'Chris Olivo'});
    var personView = new PersonView({ model : person });
</script>