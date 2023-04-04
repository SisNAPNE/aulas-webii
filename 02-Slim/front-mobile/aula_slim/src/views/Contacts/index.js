import React from 'react'
import {View} from 'react-native'

import Header from '../../components/Header'
import ContactList from '../../components/ContactList'
import styles from './styles'

function Contacts() {
  return (
    <View style={styles.container}>
        <Header />
        <ContactList />
    </View>
  )
}

export default Contacts