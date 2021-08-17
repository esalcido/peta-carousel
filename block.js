( function() {
    var registerBlockType = wp.blocks.registerBlockType;

registerBlockType( 'peta-carousel/basic-01', {
    title: __( 'GB Basic', 'GB' ),
    icon: 'shield-alt',
    category: 'common',
    
    edit: function( props ) {
                    return wp.element.createElement(
            'p',
            { className: props.className },
            'Hello World! — from the editor (01 Basic Block).'
        );
    },

} );
})();