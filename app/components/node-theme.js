// Base
SettingSection =  require('CORE/SettingSection.vue');
SettingPosition = require('CORE/SettingPosition.vue');

// Top
const SectionTopA = {
        extends: SettingSection,
        path: 'Top.A.Section'
    },
    SectionTopB = {
        extends: SettingSection,
        path: 'Top.B.Section'
    },
    PositionTopA = {
        extends: SettingPosition,
        path: 'Top.A.Position'
    },
    PositionTopB = {
        extends: SettingPosition,
        path: 'Top.B.Position'
    }

// Main
const SectionMain = {
    extends: SettingSection,
        path: 'Main.Section'
    },
    PositionMainTop = {
        extends: SettingPosition,
        path: 'Main.Top.Position'
    },
    PositionMainBottom = {
        extends: SettingPosition,
        path: 'Main.Bottom.Position'
    }

// Bottom
const SectionBottomA = {
        extends: SettingSection,
        path: 'Bottom.A.Section'
    },
    SectionBottomB = {
        extends: SettingSection,
        path: 'Bottom.B.Section'
    },
    PositionBottomA = {
        extends: SettingPosition,
        path: 'Bottom.A.Position'
    },
    PositionBottomB = {
        extends: SettingPosition,
        path: 'Bottom.B.Position'
    }

// Foot
const SectionFoot = {
        extends: SettingSection,
        path: 'Foot.Section'
    },
    PositionFoot = {
        extends: SettingPosition,
        path: 'Foot.Position'
    }

module.exports = {

    extends: require('CORE/NodeTheme.vue'),

    components: {
        SectionTopA,
        SectionTopB,
        PositionTopA,
        PositionTopB,
        SectionMain,
        PositionMainTop,
        PositionMainBottom,
        SectionBottomA,
        SectionBottomB,
        PositionBottomA,
        PositionBottomB,
        SectionFoot,
        PositionFoot
    }
}

window.Site.components['node-theme'] = module.exports;
