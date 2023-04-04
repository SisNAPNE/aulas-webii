import {StyleSheet} from 'react-native'

const styles = StyleSheet.create({
    container: {
        width: '100%',
        height: 100,
        backgroundColor: '#005200',
        borderBottomWidth: 1,
    },
    top: {
      height: 60,
      flexDirection: 'row',
      alignItems: 'center',
    },
    topLeft: {
      width: '75%',
      flexDirection: 'row',
      padding: 10,
      alignItems: 'center',
    },
    topRight: {
      width: '25%',
      flexDirection: 'row',
      alignItems: 'center',
      justifyContent: 'flex-end',
      paddingRight: 12,
    },
    textWhats: {
      color: '#FFF', 
      fontSize: 20, 
      fontWeight:'bold', 
    },
    bottom: {
      flexDirection: 'row',
      height: 40,
    },
    bottomLeft: {
      width: '10%',
      justifyContent:'center',
      alignItems: 'center',
    },
    bottomRight: {
      flexDirection: 'row',
      width: '90%',
      justifyContent:'space-around',
      alignItems: 'center',
    },
    textMenu: {
      color: '#FFF', 
      fontSize: 14, 
      fontWeight:'bold', 
    },
    selected: {
      height: 39,
      justifyContent: 'center',
      borderBottomWidth: 3,
      borderBottomColor: '#FFF',
    },
})

export default styles 