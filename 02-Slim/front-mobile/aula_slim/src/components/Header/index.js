import React from 'react'
import {View, Text, Image} from 'react-native'
import styles from './styles'

function Header() {

    return (
        <View style={styles.container}>
            <View style={styles.top}>
                <View style={styles.topLeft}>
                    <Text style={styles.textWhats}>WhatsApp</Text>
                </View>
                <View style={styles.topRight}>
                    <Image 
                        style={{width: 24, height: 24, marginRight: 25}} 
                        source={require('../../assets/search.png')} 
                    />
                    <Image 
                        style={{width: 4, height: 16}} 
                        source={require('../../assets/menu.png')} 
                    />
                </View>
            </View>
            <View style={styles.bottom}>
                <View style={styles.bottomLeft}>
                    <Image 
                        style={{width: 21, height: 16, opacity: 0.7}} 
                        source={require('../../assets/cam.png')} 
                    />
                </View>
                <View style={styles.bottomRight}>
                    <View style={styles.selected}>
                        <Text style={styles.textMenu}>CONVERSAS</Text>
                    </View>
                    <View>
                        <Text style={styles.textMenu}>STATUS</Text>
                    </View>
                    <View>
                        <Text style={styles.textMenu}>CHAMADAS</Text>
                    </View>
                </View>
            </View>
        </View>
    )
}

export default Header