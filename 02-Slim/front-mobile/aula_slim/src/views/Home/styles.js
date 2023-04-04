import {StyleSheet} from 'react-native'

const styles = StyleSheet.create({

    container: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#DDD',
        borderBottomWidth: 3,
        borderTopWidth: 2,
        borderColor: '#FFF',
    },
    box: {
        flex: 1,
        flexDirection: 'row',
        justifyContent: 'center',
        alignItems: 'center',
        // borderBottomWidth: 1,
        // borderColor: '#660033',
        width: '100%',
    },
    box_item: {
        width: '50%',
        alignItems: 'center',
        justifyContent: 'center',
    },

    text: {
        fontSize: 34,
        fontWeight: 'bold',
        color: '#660033',
        marginBottom: 10,
    },
    text_value: {
        fontSize: 64,
        fontWeight: 'bold',
        color: '#660033',
    }
})

export default styles