import elliptical from '../references/elliptical';
import container from '../dependencies/container';


elliptical.binding('sidebar', function (node) {
    var DomEvent = container.getType('DomEvent');
    var dom = new DomEvent(node, this);
    var input=dom.find('input#s');
    input.attr('placeholder','Search');

    this.dispose = ()=> {
        dom.unbind();
    };

});


   